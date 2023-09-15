<?php

include '../modelo/conex.php';
if (isset($_POST['generar_venta'])) {
  $factura = $_POST['factura'];
  $cajero = $_POST['cajero'];
  $producto = $_POST['producto'];
  $cantidad_producto = $_POST['cantidad_producto'];
 
  $guardar = mysqli_query($conectar, "INSERT INTO `ventas` ( `idFactura`, `idCajero`, `idProducto`, `VenCantidad`) VALUES ('$factura', '$cajero', '$producto', '$cantidad_producto')");
}
