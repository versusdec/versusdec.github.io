Recorder = (function () {
  const mc = {
    events: (() => {
      let observer = {};
      let events = [];
      
      setInterval(function () {
        let event = events.shift();
        
        while (event) {
          if (observer[event.name] && observer[event.name].length) {
            observer[event.name].forEach(function (item) {
              event.resolve(item(event.data, event.name))
            })
          }
          event = events.shift();
        }
      }, 10);
      
      return {
        on: function (events, cb) {
          if (typeof events == "string") {
            events = [events]
          }
          let ids = []
          events.forEach((event) => {
            observer[event] = observer[event] || []
            ids.push(observer[event].push(cb))
          })
          return ids
        },
        push: function (name, data) {
          return new Promise((resolve) => {
            events.push({name: name, data: data, resolve: resolve})
          });
        },
        off: function (events, id) {
          if (id) {
            delete observer[events][id]
          } else {
            if (typeof events == "string") {
              events = [events]
            }
            events.forEach((event) => {
              delete observer[event]
            })
            
          }
        }
      }
    })()
  }
  
  function timeFilter(value) {
    return Math.floor(+value / 60).toString().padStart(2, '0')
      + ':'
      + Math.ceil(+value % 60).toString().padStart(2, '0')
  }
  
  let r_stream, rt, recorder, blobUrl, blob, soundStream;
  
  const recorderEvents = {
    start: () => {
      navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
      if (!navigator.getUserMedia)
        return false;
      
      navigator.mediaDevices.getUserMedia({audio: true}).then(async stream => {
        let chunks = [];
        r_stream = stream;
        recorder = new MediaRecorder(stream);
        const audioContext = new AudioContext();
        const audioSource = audioContext.createMediaStreamSource(stream);
        const analyser = audioContext.createAnalyser();
        audioSource.connect(analyser);
        const volumes = new Uint8Array(analyser.frequencyBinCount);
        const volumeCallback = () => {
          analyser.getByteFrequencyData(volumes);
          let bars = [];
          for (let i = 0; i < 100; i++) {
            bars.push(volumes[i] / 2 / 100)
          }
          mc.events.push('recorder.volumes', bars)
        };
        
        recorder.onstart = () => {
          soundStream = setInterval(volumeCallback, 100);
          mc.events.push('record.start', Date.now());
        };
        
        recorder.ondataavailable = e => {
          chunks.push(e.data);
          if (recorder.state === 'inactive') {
            blob = new Blob(chunks, {type: 'audio/webm'});
            blobUrl = URL.createObjectURL(blob);
            mc.events.push('record.ready', {blob: blob, url: blobUrl})
          }
        };
        recorder.start(1000);
      }).catch(console.error);
      return true
    },
    stop: async () => {
      clearInterval(rt);
      clearInterval(soundStream);
      if (recorder && recorder.state && recorder.state !== 'inactive') {
        recorder.stop();
      }
      if (r_stream) {
        r_stream.getAudioTracks()[0].stop();
        r_stream.getAudioTracks()[0].enabled = false;
      }
      mc.events.push('record.stop');
    }
  };
  
  async function analyze(file, player) {
    player.querySelector('.loading').classList.remove('hide')
    let context = new (window.AudioContext || window.webkitAudioContext)();
    let arrayBuffer;
    const headers = new Headers();
    headers.append('cache-control', 'no-cache');
    let init = {
      method: "GET",
      headers: headers
    }
    try {
      arrayBuffer = await fetch(file, init).then(response => response.arrayBuffer());
    } catch (e) {
      const loader = player.querySelector('.loading')
      loader.innerHTML = 'error'
      loader.style.backgroundSize = 0
    }
    if (!arrayBuffer) {
      return;
    }
    
    return new Promise(function (resolve) {
      context.decodeAudioData(arrayBuffer, (audioBuffer) => {
        const rawData = audioBuffer.getChannelData(0);
        if (audioBuffer.numberOfChannels === 2) {
          audioBuffer.getChannelData(1).map((value, index) => {
            rawData[index] += value
          })
        }
        
        const samples = 100;
        const blockSize = Math.floor(rawData.length / samples);
        let filteredData = [];
        for (let i = 0; i < samples; i++) {
          let blockStart = blockSize * i;
          let sum = 0;
          for (let j = 0; j < blockSize; j++) {
            sum = sum + Math.abs(rawData[blockStart + j])
          }
          filteredData.push(sum / blockSize);
        }
        
        const multiplier = Math.pow(Math.max(...filteredData), -1);
        filteredData = filteredData.map(n => n * multiplier);
        
        resolve({
          data: filteredData,
          duration: audioBuffer.duration
        })
      }, (e) => {
        console.log(e);
        const loader = player.querySelector('.loading')
        loader.innerHTML = 'error'
        loader.style.backgroundSize = 0
      });
    })
  }
  
  function visualize(data, timeline) {
    
    function bar(value, index) {
      if (index % 2 === 0) {
        let rect = document.createElementNS('http://www.w3.org/2000/svg', 'rect')
        let height = Math.ceil(value * 100)
        rect.setAttribute('width', '2px')
        rect.setAttribute('height', height + '%')
        rect.setAttribute('y', 100 - height + '%')
        rect.setAttribute('x', index + '%')
        rect.classList.add('rect')
        // rect.setAttribute('fill', '#A09DC0')
        
        let filler = document.createElementNS('http://www.w3.org/2000/svg', 'rect')
        filler.setAttribute('index', index)
        filler.setAttribute('height', '100%')
        filler.setAttribute('width', '4px')
        filler.setAttribute('x', index + '%')
        filler.setAttribute('fill', 'rgba(0,0,0,0)')
        const node = document.createElement('g')
        node.appendChild(rect);
        node.appendChild(filler);
        return node
      } else return ''
    }
    
    let svg = document.createDocumentFragment()
    for (let index in data) {
      const bars = bar(data[index], index);
      while (bars.firstChild) {
        svg.appendChild(bars.firstChild)
      }
    }
    timeline.innerHTML = '';
    timeline.append(svg);
    
    if (!timeline.closest('.player').querySelector('.loading').classList.contains('hide'))
      timeline.closest('.player').querySelector('.loading').classList.add('hide');
  }
  
  function initialVisualisation($player) {
    let bars = [];
    for (let i = 0; i < 100; i++) {
      bars.push(0.1)
    }
    visualize(bars, $player.querySelector('.timeline'), $player)
  }
  
  function fillTimeline(value, timeline, ps) {
    [...timeline.querySelectorAll('rect:not([index])')].forEach((elem, i) => {
      if (value === 1) {
        elem.classList.remove('ps')
        elem.classList.remove('s')
      } else {
        if (i * 2 - 1 <= value) {
          if (ps) {
            elem.classList.add('ps')
          } else {
            elem.classList.add('s')
          }
          
        } else {
          if (ps) {
            elem.classList.remove('ps')
          } else {
            elem.classList.remove('s')
          }
        }
      }
    })
  }
  
  let events = {
    playback: {},
    record: {}
  }
  
  function Recorder(target, params) {
    !params ? params = {record: false, file: false, playerMode: true} : !params.record ? params.playerMode = true : void 0;
    let file = params.file;
    if (file instanceof File)
      file = window.URL.createObjectURL(file)
    
    const id = 'player_' + Math.round(Math.random() * 1000000)
    
    const player = document.createElement('div');
    player.id = id;
    player.classList = 'player'
    const record = document.createElement('button');
    record.classList = `record ${(file || params.playerMode) ? 'hide' : ''}`;
    const play = document.createElement('button');
    play.classList = `play ${(!file && !params.playerMode) ? 'hide' : ''}`;
    const pause = document.createElement('button');
    pause.classList = `pause hide`;
    const stop = document.createElement('button');
    stop.classList = `stop `;
    const audioWrap = document.createElement('div');
    audioWrap.classList = 'audio';
    const audio = document.createElement('audio');
    audio.src = file;
    audioWrap.append(audio)
    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.setAttribute('version', '1.1')
    svg.setAttribute('xmlns:xlink', 'http://www.w3.org/1999/xlink')
    svg.setAttribute('width', '100%')
    svg.setAttribute('height', '20')
    svg.setAttribute('aria-labelledby', 'title')
    svg.setAttribute('role', 'img')
    svg.classList = 'timeline'
    const loading = document.createElement('div')
    loading.classList = 'loading hide'
    loading.innerHTML = 'loading';
    const progress = document.createElement('progress')
    progress.setAttribute('value', 1)
    progress.setAttribute('max', 100)
    const timer = document.createElement('div')
    timer.classList = `timer ${(file || params.playerMode) ? '' : 'hide'}`
    const current = document.createElement('span')
    current.classList = 'current'
    current.innerHTML = '00:00'
    const total = document.createElement('span')
    total.innerHTML = '00:00'
    total.classList = 'total'
    timer.append(current)
    timer.append(" / ")
    timer.append(total)
    const recordTime = document.createElement('div')
    recordTime.classList = `record_time ${(!params.record || file) ? 'hide' : ''}`
    const recordTotal = document.createElement('span')
    recordTotal.classList = 'total'
    recordTotal.innerHTML = '00:00'
    recordTime.append(recordTotal)
    const remove = document.createElement('a')
    remove.setAttribute('disabled', true)
    remove.classList = `close link ${(!params.record) ? 'hide' : ''}`
    remove.setAttribute('title', 'Delete')
    remove.innerHTML = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n' +
      '\t viewBox="0 0 250 250" width="15" height="15" xml:space="preserve">\n' +
      '<g style="transform: scale(2) translate(-60px, -60px);">\n' +
      '\t<path d="M164.612,87.388c-3.515-3.515-9.213-3.515-12.728,0L126,113.272l-25.885-25.885c-3.515-3.515-9.213-3.515-12.728,0\n' +
      '\t\tc-3.515,3.515-3.515,9.213,0,12.728L113.272,126l-25.885,25.885c-3.515,3.515-3.515,9.213,0,12.728\n' +
      '\t\tc1.757,1.757,4.061,2.636,6.364,2.636s4.606-0.879,6.364-2.636L126,138.728l25.885,25.885c1.757,1.757,4.061,2.636,6.364,2.636\n' +
      '\t\ts4.606-0.879,6.364-2.636c3.515-3.515,3.515-9.213,0-12.728L138.728,126l25.885-25.885\n' +
      '\t\tC168.127,96.601,168.127,90.902,164.612,87.388z"/>\n' +
      '</g>\n' +
      '</svg>\n'
    const download = document.createElement('a')
    params.playerMode ? download.style.right = 0 : void 0;
    download.setAttribute('disabled', true)
    download.classList = `download link `
    download.setAttribute('title', 'Download')
    download.innerHTML = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n' +
      '\t viewBox="0 0 330 330" width="20" height="20" xml:space="preserve">\n' +
      '<g style="transform: scale(1.2) translate(-40px, -40px);">\n' +
      '\t<path d="M211.667,127.121l-31.669,31.666V75c0-8.285-6.716-15-15-15c-8.284,0-15,6.715-15,15v83.787l-31.665-31.666\n' +
      '\t\tc-5.857-5.857-15.355-5.857-21.213,0c-5.858,5.859-5.858,15.355,0,21.213l57.271,57.271c2.929,2.93,6.768,4.395,10.606,4.395\n' +
      '\t\tc3.838,0,7.678-1.465,10.607-4.393l57.275-57.271c5.857-5.857,5.858-15.355,0.001-21.215\n' +
      '\t\tC227.021,121.264,217.524,121.264,211.667,127.121z"/>\n' +
      '\t<path d="M195,240h-60c-8.284,0-15,6.715-15,15c0,8.283,6.716,15,15,15h60c8.284,0,15-6.717,15-15C210,246.715,203.284,240,195,240z\n' +
      '\t\t"/>\n' +
      '</g>\n' +
      '</svg>\n'
    
    player.append(record)
    player.append(play)
    player.append(pause)
    player.append(stop)
    player.append(audioWrap)
    player.append(svg)
    player.append(loading)
    player.append(progress)
    player.append(timer)
    player.append(recordTime)
    player.append(remove)
    player.append(download)
    
    const audioInfo = (file, $player) => {
      analyze(file, $player).then(audioInfo => {
        if (audioInfo) {
          visualize(audioInfo.data, $player.querySelector('.timeline'), $player)
          $player.querySelector('.timer .total').innerHTML = timeFilter(Math.floor(audioInfo.duration))
          const player_audio = $player.querySelector('audio');
          player_audio.setAttribute('src', file);
          
          const updateProgress = (progress) => {
            const position = $player.querySelector('progress')
            position.attributes.value.value = progress
          }
          
          const updatetime = (secs) => {
            let progress = Math.floor(secs * 100 / audioInfo.duration) + 1;
            fillTimeline(progress, $player.querySelector('.timeline'))
            $player.querySelector('.timer .current').innerHTML = timeFilter(Math.floor(secs))
            if (!events.record.hovering) updateProgress(progress)
          }
          $player.querySelector('.timer').classList.remove('hide');
          $player.querySelector('progress').style.width = '150px';
          $player.querySelector('.record_time').classList.add('hide');
          $player.querySelector('.download').removeAttribute('disabled');
          $player.querySelector('.close').removeAttribute('disabled');
          player_audio.addEventListener('timeupdate', (e) => {
            const secs = e.target.currentTime
            updatetime(secs)
          });
          
          events.playback = {
            play: () => {
              if ($player.querySelector('.player.playing')) {
                $player.querySelector('.player.playing .pause').click()
              }
              player_audio.play();
              $player.querySelector('button.play').classList.add('hide');
              $player.querySelector('button.pause').classList.remove('hide');
              $player.classList.add('playing');
              $player.querySelector('button.stop').removeAttribute('disabled', true);
            },
            pause: () => {
              player_audio.pause();
              $player.querySelector('button.pause').classList.add('hide');
              $player.querySelector('button.play').classList.remove('hide');
              $player.classList.remove('playing');
              $player.querySelector('button.stop').removeAttribute('disabled', true);
            },
            stop: () => {
              player_audio.pause();
              player_audio.currentTime = 0;
              $player.querySelector('button.pause').classList.add('hide');
              $player.querySelector('button.play').classList.remove('hide');
            }
          }
          
          $player.querySelector('audio').onended = events.playback.stop;
          
          $player.querySelector('button.stop').removeEventListener('click', events.record.stop);
          
          $player.querySelector('button.play').addEventListener('click', events.playback.play);
          
          $player.querySelector('button.stop').addEventListener('click', events.playback.stop);
          
          $player.querySelector('button.pause').addEventListener('click', events.playback.pause);
          
          events.playback.timelineHover = (e) => {
            if (e.target.tagName === 'rect') {
              const index = e.target.attributes.index.value
              if (+index) {
                fillTimeline(+index, e.target.parentNode, true)
              }
            }
          }
          events.playback.timelineClick = (e) => {
            if (e.target.tagName === 'rect') {
              const index = e.target.attributes.index.value;
              if (+index) {
                player_audio.currentTime = Math.floor(audioInfo.duration * (+index / 100))
              }
            }
          }
          
          $player.querySelector('.timeline').addEventListener('mouseover', events.playback.timelineHover)
          $player.querySelector('.timeline').addEventListener('click', events.playback.timelineClick)
          
          events.record.progressValue = null;
          events.record.mouseEnter = (e) => {
            events.record.hovering = true;
            events.record.progressValue = e.target.value;
          }
          events.record.mouseLeave = (e) => {
            events.record.hovering = false;
            e.target.value = events.record.progressValue;
          }
          events.record.mouseMove = (e) => {
            e.target.value = e.offsetX / 2 * 1.33;
          }
          events.record.clickRemove = (e) => {
            const index = e.offsetX / 2 * 1.33;
            events.record.progressValue = index;
            if (+index) {
              player_audio.currentTime = Math.floor(audioInfo.duration * (+index / 100))
            }
          }
          
          $player.querySelector('progress').addEventListener('mouseenter', events.record.mouseEnter)
          $player.querySelector('progress').addEventListener('mouseleave', events.record.mouseLeave)
          $player.querySelector('progress').addEventListener('mousemove', events.record.mouseMove)
          $player.querySelector('progress').addEventListener('click', events.record.clickRemove)
          
        }
      })
    }
    
    const recorder = ($player) => {
      let time;
      events.record = {
        record: () => {
          const started = recorderEvents.start();
          if (!started)
            return alert('Unable to use microphone')
          $player.classList.add('recording');
          $player.querySelector('button.record').setAttribute('disabled', true);
          $player.querySelector('button.stop').removeAttribute('disabled');
          mc.events.off(['record.start', 'recorder.volumes'])
          mc.events.on('record.start', (start) => {
            time = setInterval(function () {
              const delta = Date.now() - start;
              $player.querySelector('.record_time > .total').innerHTML = timeFilter(Math.floor((delta / 1000)));
            }, 1000);
          });
          mc.events.on('recorder.volumes', (volumes) => {
            visualize(volumes, $player.querySelector('.timeline'), $player)
          });
        },
        stop: () => {
          mc.events.off(['record.stop', 'record.ready']);
          mc.events.on('record.stop', () => {
            clearInterval(time)
          });
          recorderEvents.stop();
          $player.classList.contains('recording') ? $player.querySelector('.close').removeAttribute('disabled') : void 0;
          $player.querySelector('button.stop').setAttribute('disabled', true);
          $player.classList.remove('recording');
          $player.querySelector('button.record').classList.add('hide');
          $player.querySelector('button.record').removeAttribute('disabled');
          $player.querySelector('button.play').classList.remove('hide');
          $player.querySelector('a.close').removeAttribute('disabled');
          $player.querySelector('a.download').removeAttribute('disabled');
          mc.events.on('record.ready', ({blob, url}) => {
            $player.blob = blob;
            audioInfo(url, $player)
          });
        }
      }
      initialVisualisation($player)
      $player.querySelector('.timer').classList.add('hide');
      $player.querySelector('progress').style.width = '185px';
      $player.querySelector('.record_time').classList.remove('hide')
      $player.querySelector('.record_time .total').innerHTML = '00:00';
      $player.querySelector('.play').classList.add('hide');
      $player.querySelector('.record').classList.remove('hide');
      $player.querySelector('button.stop').addEventListener('click', events.record.stop);
      $player.querySelector('button.record').addEventListener('click', events.record.record);
    }
    
    const downloadHandler = (blob) => {
      const url = window.URL.createObjectURL(blob);
      const a = document.createElement('a');
      const id = 'dwnl_' + Math.round(Math.random() * 1000000)
      a.id = id;
      let filename = 'record';
      
      try {
        filename = file.split('/')[file.split('/').length - 1]
      } catch (e) {
      
      }
      
      a.style.display = 'none';
      a.href = url;
      
      a.download = filename;
      document.body.appendChild(a);
      a.click();
      window.URL.revokeObjectURL(url);
      document.getElementById(id).remove();
    }
    
    const updateAudio = ($player) => {
      if (file) {
        audioInfo(file, $player)
      }
      if (params.record && !file) {
        recorder($player);
      }
      
      $player.querySelector('.download').addEventListener('click', function (e) {
        if (this.attributes.disabled)
          return;
        if (file) {
          fetch(file)
            .then(resp => resp.blob())
            .then(blob => {
              downloadHandler(blob, 'file')
            })
            .catch((e) =>
              console.log(e));
        } else if ($player.blob) {
          downloadHandler($player.blob)
        }
      })
      
      $player.querySelector('.close').addEventListener('click', function (e) {
        events.handleClose($player, e.target.closest('.close'))
      })
    }
    
    let playerInstance;
    
    const Instance = {
      player: playerInstance,
      updateFile: (f) => {
        if (!f)
          return;
        file = window.URL.createObjectURL(f);
        playerInstance.querySelector('.timeline').innerHTML = '';
        playerInstance.querySelector('button.record').classList.add('hide')
        playerInstance.querySelector('button.play').classList.remove('hide')
        updateAudio(playerInstance)
      }
    }
    
    target.append(player);
    
    let wait_load = setInterval(() => {
      let $player = document.getElementById(id);
      playerInstance = $player;
      events.handleClose = function ($player, target) {
        if (target.attributes.disabled) {
          return;
        }
        $player.querySelector('progress').removeEventListener('mouseenter', events.record.mouseEnter)
        $player.querySelector('progress').removeEventListener('mousemove', events.record.mouseMove)
        $player.querySelector('progress').removeEventListener('mouseleave', events.record.mouseLeave)
        $player.querySelector('progress').removeEventListener('click', events.record.clickRemove)
        $player.querySelector('.timeline').removeEventListener('mouseover', events.playback.timelineHover)
        $player.querySelector('.timeline').removeEventListener('click', events.playback.timelineClick)
        
        delete $player.blob;
        $player.querySelector('progress').setAttribute('value', 0)
        target.setAttribute('disabled', true);
        $player.querySelector('a.download').setAttribute('disabled', true)
        $player.querySelector('button.stop').setAttribute('disabled', true)
        $player.classList.contains('playing') ? events.playback.stop() : void 0;
        $player.classList.contains('recording') ? events.playback.stop() : void 0;
        $player.querySelector('button.stop').removeEventListener('click', events.playback.stop);
        $player.querySelector('button.record').removeEventListener('click', events.record.record);
        recorder($player)
      }
      if ($player) {
        updateAudio($player)
        
        clearInterval(wait_load)
      }
    }, 300)
    
    return Instance
  }
  
  return Recorder
})()