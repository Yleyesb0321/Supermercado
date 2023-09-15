<?php
//include '../modelo/conectar_filtro.php';

$product = "SELECT * FROM productos";
$resultado = $conexion->prepare($product);
$resultado->execute();
$ver = $resultado->fetchAll(PDO::FETCH_ASSOC);