<?php

include '../modelo/conectar_filtro.php';

$consulta = "SELECT * FROM cajeros";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$cajeros = $resultado->fetchAll(PDO::FETCH_ASSOC);
