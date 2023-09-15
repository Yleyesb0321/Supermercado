<?php
//include '../modelo/conectar_filtro.php';

$consultas = "SELECT * FROM clientes";
$resultado = $conexion->prepare($consultas);
$resultado->execute();
$clientes = $resultado->fetchAll(PDO::FETCH_ASSOC);
