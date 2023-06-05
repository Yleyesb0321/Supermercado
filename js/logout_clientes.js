const btnLink = document.querySelector('.btn_logout')

btnLink.addEventListener('click', (e)=>{
  e.preventDefault()
  window.location.replace("../vistas/ventas.php")
})