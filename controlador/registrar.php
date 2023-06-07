<?php

include '../modelo/conex.php';


if(isset($_POST['btn_registrar'])){
  $idEmpleado = $_POST['idEmpleado'];
  $CliNombre = $_POST['nombre'];
  $CliApellido = $_POST['apellido'];
  $CliIdentificacion = $_POST['documento'];
  $CliTelefono = $_POST['telefono'];
  $CliCorreo = $_POST['email'];
  
  
	
  if($idEmpleado ="" || $CliNombre =="" || $CliApellido =="" || $CliIdentificacion =="" || $CliTelefono =="" || $CliCorreo =="" ){
    echo "<script> Swal.fire('Todos los Campos son obligatorios')</script>";
  }
  else{
    $registrar = mysqli_query(
      $conectar, 
      "INSERT INTO clientes (idEmpleado, CliNombre, CliApellido, CliIdentificacion, CliTelefono, CliCorreo,) 
      VALUES ('$idEmpleado','$CliNombre', '$CliApellido', '$CliIdentificacion', '$CliTelefono', '$CliCorreo')");

    echo "<script> Swal.fire('Registro Exitoso')</script>";
  }
	
}
?>