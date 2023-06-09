<?php

include '../modelo/conex.php';


if (isset($_POST['btn_registrar'])) {

  $CliNombre = $_POST['nombre'];
  $CliApellido = $_POST['apellido'];
  $CliIdentificacion = $_POST['documento'];
  $CliTelefono = $_POST['telefono'];
  $CliCorreo = $_POST['email'];
  $idEmpleado = $_POST['idEmpleado'];



  if ($CliNombre == "" || $CliApellido == "" || $CliIdentificacion == "" || $CliTelefono == "" || $CliCorreo == "" || $idEmpleado == "") {
    echo "<script> Swal.fire('Todos los Campos son obligatorios')</script>";
  } else {
    $registrar = mysqli_query(
      $conectar,
      "INSERT INTO clientes (CliNombre, CliApellido, CliIdentificacion, CliTelefono, CliCorreo, idEmpleado) 
      VALUES('$CliNombre', '$CliApellido', '$CliIdentificacion', '$CliTelefono', '$CliCorreo', '$idEmpleado')"
    );

    echo "<script> Swal.fire('Registro Exitoso')</script>";
  }
}
