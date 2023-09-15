<?php

//include '../modelo/conex.php';


if (isset($_POST['actualizo'])) {
  $id = $_POST['id'];
  $CliNombre = $_POST['nombre'];
  $CliApellido = $_POST['apellido'];
  $CliIdentificacion = $_POST['documento'];
  $CliTelefono = $_POST['telefono'];
  $CliCorreo = $_POST['email'];


  $actualizar = mysqli_query($conectar, "UPDATE clientes SET CliNombre='$CliNombre', CliApellido='$CliApellido', CliIdentificacion='$CliIdentificacion', CliTelefono='$CliTelefono', CliCorreo='$CliCorreo' WHERE idCliente='$id' ");

  if ($actualizar) {
    echo "<script> Swal.fire('Cliente Actualizado')</script>";
  } else {
    echo "<script> Swal.fire('Error al actualizar el cliente')</script>";
  }
}
