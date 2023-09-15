
//Agrega los modulos de buscar cliente y productos

const venta = document.querySelector('.container_ventas');
const btnVenta = document.querySelector('.btn_venta')


btnVenta.addEventListener('click', (e)=>{//Aparece el buscador, cuando selecciona el boton
  e.preventDefault()
  venta.classList.add('venta-popup')
});

/*
const producto = document.querySelector('.container_productos');
const btnProducto = document.querySelector('.btn_venta');

btnProducto.addEventListener('click', (e)=>{//Aparece el buscador, cuando selecciona el boton
  e.preventDefault()
  producto.classList.add('venta-popup')
});
*/
