
//Realiza la Carga del Loader
/*
window.addEventListener('load', (e)=>{
  e.preventDefault()
  const contenedor_loader = document.querySelector('.contenedor_loader');
  contenedor_loader.style.opacity = 0;
  contenedor_loader.style.visibility = 'hidden'
})
*/

const login = document.querySelector('.container_login');//Llama al container del login
const btnLogin = document.querySelector('.btn_login');//Llama el boton de inicar sesion
const btnLink = document.querySelector('.btn_link')
const olvidar = document.querySelector('.forget');


btnLogin.addEventListener('click', ()=>{//Aparece al login, cuando selecciona el boton
  login.classList.add('active-popup')
});


olvidar.addEventListener('click', (e)=>{
  e.preventDefault()
  Swal.fire('Comunicate con el Administrador para reestablecer la contraseña')
});

/*
btnLink.addEventListener('click', (e)=>{
  e.preventDefault()
  window.location.replace("principal.html")
})



const username = document.querySelectorById('name');//Toma el nombre del usuario
const password = document.querySelectorById('password');//Toma la password del usuario
const rol = document.querySelectorById('rol');//Toma el rol del usuario
const boton = document.querySelectorById('boton');

boton.addEventListener('click', (e)=>{
  e.preventDefault()
  const data ={
    username: username.value,
    password: password.value,
    rol: rol.value
  }
  console.log(data)
})
*/


