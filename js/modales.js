
//Abrir los MODALES

/* --REGISTRAR-- */
const openModal = document.querySelector('.btn_registrar');
const registrar = document.querySelector('.modalRegistrar');

//Activa el modal Registrar
openModal.addEventListener('click', (e)=>{
  e.preventDefault();
  registrar.classList.add('modal--showRegistrar');
});

//Cierra el modal Registrar
const cerrarRegistrar = document.querySelector('.btn_cancelar');
cerrarRegistrar.addEventListener('click', (e)=>{
  e.preventDefault();
  registrar.classList.remove('modal--showRegistrar');
});


/*-- EDITAR --*/
const openEditar = document.querySelector('.btn_editar');
const editar = document.querySelector('.modalEditar');

//Activa el modal Editar
openEditar.addEventListener('click', (e)=>{
  e.preventDefault();
  editar.classList.add('modal--showEditar');
  
});

//Cierra el modal Editar
const cerrarEditar = document.querySelector('.btn_cancelarEditar');
cerrarEditar.addEventListener('click', (e)=>{
  e.preventDefault();
  editar.classList.remove('modal--showEditar');
});


/*-- ELIMINAR --*/
const openEliminar = document.querySelector('.btn_borrar');
const eliminar = document.querySelector('.modalEliminar');

//Activa el modal Eliminar
openEliminar.addEventListener('click', (e)=>{
  e.preventDefault();
  eliminar.classList.add('modal--showEliminar');
  
});

//Cierra el modal Eliminar
const cerrarEliminar = document.querySelector('.btn_cancelarEliminar');
cerrarEliminar.addEventListener('click', (e)=>{
  e.preventDefault();
  eliminar.classList.remove('modal--showEliminar');
});

//ABRIR MODAL FACTURA//
