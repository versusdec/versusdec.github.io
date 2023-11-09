Dropzone = (function () {
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
  
  mc.events.on('file.change', async (data) => {
    const dropzone = document.getElementById(data.dropzone);
    let files = [];
    let valid = false;
    data.files.forEach((file) => {
      if (data.accept) {
        var accept = data.accept.split(',')
      }
      if (accept) {
        let ext = '.' + file.name.split('.')[file.name.split('.').length - 1];
        if (accept.find(x => x === ext)) {
          files.push(file)
          valid = true
        } else {
          alert('File not supported')
          return false
        }
      } else if (!accept) {
        files.push(file)
        valid = true
      } else {
        return false
      }
    })
    
    if (valid) {
      let info = [];
      data.files.forEach((file) => {
        info.push(file.name)
      })
      
      dropzone.querySelector('span span').innerText = info.join(', ');
      if (data.onchange) {
        data.onchange(files)
      }
    }
  })
  
  const Dropzone = (target, params) => {
    let id = 'dropzone_' + Math.round(Math.random() * 1000000)
    let data = {id: id, accept: params?.accept};
    
    if (params?.multiple) {
      data.multiple = 'multiple'
    }
    
    const dropzone = document.createElement('div')
    dropzone.classList = 'dropzone';
    dropzone.id = id;
    const fileInput = document.createElement('input')
    fileInput.setAttribute('type', 'file')
    fileInput.setAttribute('accept', '*/*')
    params?.multiple && fileInput.setAttribute('multiple', 'true')
    fileInput.addEventListener('change', function (e) {
      mc.events.push('file.change', {files: [...this.files], dropzone: id, url: params?.url, accept: params?.accept, onchange: params?.onChange})
    })
    const innerWrapper = document.createElement('span')
    const btn = document.createElement('button')
    btn.innerText = 'Choose file';
    const text = document.createElement('span')
    text.innerText = `or drag and drop file here ${data.accept ? '(' + data.accept + ')' : ''}`
    innerWrapper.append(btn)
    innerWrapper.append(' ')
    innerWrapper.append(text)
    const icon = document.createElement('i')
    icon.innerHTML = "<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'\n" +
      "     viewBox='0 0 490 490' xml:space='preserve'>\n" +
      "\t<g>\n" +
      "\t\t<path d='M257.05,115.5c-7.3-6.2-18.7-6.2-26,0L32.35,283c-10.7,10.7-8.4,35.4,13.5,35.4h61.4v150.8c0,11.4,9.4,20.8,20.8,20.8h233\n" +
      "\t\t\tc11.4,0,20.8-9.4,20.8-19.8V319.4h61.4c17,0,27.4-21.5,12.5-36.4L257.05,115.5z M362.05,277.8c-11.4,0-20.8,9.4-20.8,20.8v150.8\n" +
      "\t\t\th-192.4V298.6c0-11.4-9.4-20.8-20.8-20.8h-26l142.5-120.7l143.5,120.7H362.05z'/>\n" +
      "        <path d='M469.25,0H20.85C9.45,0,0.05,9.4,0.05,20.8s9.4,20.8,20.8,20.8h447.3c11.4,0,21.8-9.4,21.8-20.8S480.65,0,469.25,0z'/>\n" +
      "\t</g>\n" +
      "</svg>\n";
    
    dropzone.append(fileInput)
    dropzone.append(innerWrapper)
    dropzone.append(icon)
    
    target.append(dropzone)
    
    let wait_load = setInterval(() => {
      let $dropzone = document.getElementById(id)
      if ($dropzone) {
        clearInterval(wait_load)
      }
      
      $dropzone.addEventListener('dragover', () => {
        $dropzone.classList.add('over')
      })
      
      $dropzone.addEventListener('dragleave', () => {
        $dropzone.classList.remove('over')
      })
      
      $dropzone.addEventListener('drop', () => {
        $dropzone.classList.remove('over')
      })
      
      $dropzone.__proto__.onChange = params?.onChange
      if (params?.accept) {
        $dropzone.__proto__.accept = params?.accept
      } else {
        $dropzone.__proto__.accept = false;
      }
      
    }, 300)
    // return await dropzone_view(data)
  }
  
  return Dropzone;
})()