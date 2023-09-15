<?php

include '../modelo/conectar_filtro.php';

$consulta = "SELECT * FROM empleados";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$clientes = $resultado->fetchAll(PDO::FETCH_ASSOC);
