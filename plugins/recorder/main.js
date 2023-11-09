window.onload = () => {
  const app = document.getElementById('app');
  Dropzone(app, {
    accept: '.mp3',
    onChange: (files) => {
      recorder.updateFile(files[0])
    }
  })
  const recorder = Recorder(app, {record: true, file: '/plugins/recorder/example.mp3'})
  
  
  // Recorder(app, {record: true, file: '/plugins/recorder/eric.mp3'})
  // Recorder(app, {record: false, file: '/plugins/recorder/eric.mp3'})
  // Recorder(app, {record: true})
  // Recorder(app, {file: '/plugins/recorder/eric.mp3'})
  // Recorder(app, {record: true})
}