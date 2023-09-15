<?php

include '../modelo/conex.php';

if (isset($_POST['btn_editar'])) {
  $id = $_POST['idcliente'];
  $sql = "SELECT * FROM clientes WHERE idCliente = '$id'";
  $editar = $conectar->prepare($sql);
  $editar->execute();


}
