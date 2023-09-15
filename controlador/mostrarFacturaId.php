<?php
//include '../modelo/conectar_filtro.php';

if (isset($_POST['facturaId'])) {
  $id = $_POST['idFactura'];
  $consulta = "SELECT * FROM `ventas` INNER join productos on ventas.idProducto = productos.idProducto 
              INNER join cajeros on ventas.idCajero = cajeros.idCajero WHERE idFactura=$id";
  $resultado = $conexion->prepare($consulta);
  $resultado->execute();
  $facturasId = $resultado->fetchAll(PDO::FETCH_ASSOC);
}
