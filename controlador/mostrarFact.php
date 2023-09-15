<?php
//include '../modelo/conectar_filtro.php';

$consulta = "SELECT * FROM `facturas` INNER join clientes on facturas.idCliente = clientes.idCliente";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$facturas = $resultado->fetchAll(PDO::FETCH_ASSOC);
print_r($facturas);
