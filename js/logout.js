
window.addEventListener('load', ()=>{
  const contenedor_loader = document.querySelector('.contenedor_loader');
  contenedor_loader.style.opacity = 0;
  contenedor_loader.style.visibility = 'hidden'
  
})

const btnLink = document.querySelector('.btn_logout')

btnLink.addEventListener('click', (e)=>{
  e.preventDefault()
  window.location.replace("index.html")
})