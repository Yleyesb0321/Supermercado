
<?php

require_once("./modelo/conex.php");


//Iniciamos la ssesion
session_start();

//Validacion del ingreso

if (isset($_POST['btn_Ingresar'])) {


  $user = $_POST['Usuarios'];
  $clave = $_POST['Clave'];
  $rol = $_POST['Rol'];


  if ($user == "" || $clave == "" || $rol == "") {
    echo "<script> Swal.fire('Todos los Campos son obligatorios')</script>";
    //header("location: index.php");
  }

  $upass  = "SELECT * FROM usuarios_pass WHERE Usuarios = '$user' AND Clave = '$clave' AND Rol = '$rol' ";
  $result = $conectar->query($upass);


  /*
  include_once("./modelo/conex.php");
  $user = $_POST['Usuarios'];
  $clave = $_POST['Clave'];
  $rol = $_POST['Rol'];
*/
  //$upass  = "SELECT * FROM usuarios_pass WHERE Usuarios = '$user' AND Clave = '$clave' AND Rol = '$rol' ";
  //$result = $conectar->query($upass);

  if ($result->num_rows > 0) {

    //Si el usuario es valido, lo redirigimos al perfil correspondiente
    $row = $result->fetch_assoc();

    $_SESSION['Id_UsuariosPass'] = $row['Id_UsuariosPass'];
    $_SESSION['EmpNombre'] = $row['EmpNombre'];
    $_SESSION['Usuarios'] = $row['Usuarios'];
    $_SESSION['Clave'] = $row['Clave'];
    $_SESSION['Rol'] = $row['Rol'];


    /*
    if ($clave != $row['Clave']) {
      echo "<script> Swal.fire('La contraseña ingresada no es valida') </script>";
      //session_destroy();
    }*/

    $typeUser = $row['Rol'];

    if ($typeUser == 'CJ') {
      header("Location: ../vistas/cajeros.php");
    } elseif ($typeUser == 'JD') {
      header("Location: ../vistas/principal.php");
    } elseif ($typeUser == 'AX') {
      header("Location: ../vistas/404.php");
    }
  } else {
    echo "<script> Swal.fire('Los datos ingresados no son validos') </script>";
  }
}


?>