

const login = document.querySelector('.container_login');//Llama al container del login
const btnLogin = document.querySelector('.btn_login');//Llama el boton de inicar sesion
const btnLink = document.querySelector('.btn_link')
const olvidar = document.querySelector('.forget');


btnLogin.addEventListener('click', (e)=>{//Aparece al login, cuando selecciona el boton
  e.preventDefault()
  login.classList.add('active-popup')
});

/*
const username = document.querySelectorAll('name');//Toma el nombre del usuario
const password = document.querySelectorAll('clave');//Toma la password del usuario
const rol = document.querySelectorAll('rol');//Toma el rol del usuario

btnLink.addEventListener('click', (e)=>{//Valida los campos vacios
  e.preventDefault()
  const data ={
    Usuarios: username.value,
    Clave: password.value,
    Rol: rol.value
  };
  if (data == "") {
    Swal.fire('Todos los campos son obligatorios')
  };
});

*/

olvidar.addEventListener('click', (e)=>{
  e.preventDefault()
  Swal.fire('Comunicate con el Administrador para reestablecer la contraseña')
});


/*
btnLink.addEventListener('click', (e)=>{
  e.preventDefault()
  window.location.replace("principal.html")
})
*/








