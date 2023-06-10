
<?php


//Validacion del ingreso
if (isset($_POST['btn_Ingresar'])){


  if (empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol'])) {
    echo "<script> Swal.fire('Todos los Campos son obligatorios')</script>";
  }
  else{
    require_once '../modelo/conex.php';
    //Guardamos las datos ingresados
    $user  = $_POST['usuario'];
    $clave = $_POST['clave'];
    $rol   = $_POST['rol'];

    //Se hace la conexion a la DB
    $ingreso = mysqli_query($conectar, "SELECT * FROM usuarios_pass WHERE Usuarios = '$user' AND Clave = '$clave' AND Rol = '$rol' ");

    //Aplicamos las Sessiones
    $result = mysqli_num_rows($ingreso);

    //Condicional si encuentra algun valor
    if($result > 0){
      //Guarda los datos del usuario
      $data = mysqli_fetch_array($ingreso);

      //Iniciamos las sesiones
      session_start();

      //Variables de Sesion
      $_SESSION['active'] = true;
      $_SESSION['idUser'] = $data['Id_UsuariosPass'];
      $_SESSION['idEmpleado'] = $data['idEmpleado'];
      $_SESSION['Usuarios'] = $data['Usuarios'];
      $_SESSION['Clave'] = $data['Clave'];
      $_SESSION['Rol'] = $data['Rol'];

      //Redireccionamos al ingresar
      header('location: vistas/ventas.php');
    }
    else{
      echo "<script> Swal.fire('El usuario, la Clave o el Rol son Incorrectos')</script>";

      //Se destruye la sesion
      session_destroy();
    }
  }
}

?>