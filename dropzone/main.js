window.onload = () => {
  const app = document.getElementById('app');
  
  const dz = Dropzone(app, {
    accept: null,
    multiple: false,
    onChange: (files) => {
      console.table(files)
    }
  })
}