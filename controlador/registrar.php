<?php

include '../modelo/conex.php';


if(isset($_POST['btn_Registrar'])){
  $CliNombre = $_POST['nombre'];
  $CliApellido = $_POST['apellido'];
  $CliIdentificacion = $_POST['documento'];
  $CliTelefono = $_POST['telefono'];
  $CliCorreo = $_POST['email'];
  
  
	
  if($CliNombre =="" || $CliApellido =="" || $CliIdentificacion =="" || $CliTelefono =="" || $CliCorreo =="" ){
    echo "<script> Swal.fire('Todos los Campos son obligatorios')</script>";
  }
  else{
    $guardar = mysqli_query(
      $conectar, 
      "INSERT INTO clientes (CliNombre, CliApellido, CliIdentificacion, CliTelefono, CliCorreo,) 
      VALUES ('$CliNombre', '$CliApellido', '$CliIdentificacion', '$CliTelefono', '$CliCorreo')");

    echo "<script> Swal.fire('Registro Exitoso')</script>";
  }
	
}
?>