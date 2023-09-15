<?php
//include '../modelo/conectar_filtro.php';

$consulta = "SELECT * FROM detalles_compras";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$detallesCompra = $resultado->fetchAll(PDO::FETCH_ASSOC);