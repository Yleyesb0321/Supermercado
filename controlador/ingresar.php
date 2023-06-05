
<?php

include '../modelo/conex.php';

if (isset($_POST['btn_Ingresar'])){

  $Usuario = $_POST['usuario'];
  $Clave = $_POST['clave'];
  $Rol = $_POST['rol'];

  if ($Usuario == "" || $Clave == "" || $Rol == "") {
    echo "<script> Swal.fire('Todos los Campos son obligatorios')</script>";
  }
  else{
    
  }
}

?>