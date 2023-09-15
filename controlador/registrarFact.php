<?php

//include '../modelo/conex.php';
if (isset($_POST['guardar'])) {

  $id = $_POST['factura_cli'];
  $Fecha = $_POST['Fecha'];
  $guardar = mysqli_query($conectar, "INSERT INTO facturas (idCliente, Fecha) VALUES($id, '$Fecha')");
}
