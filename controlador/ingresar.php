
<?php 

  include '../modelo/conex.php';


  if (isset($_POST['btn_Ingresar'])) {
    $Usuario = $_POST['usuario'];
    $Clave = $_POST['clave'];
    $Rol = $_POST['rol'];

    if($Usuario == "" || $Clave == "" || $Rol == "" ){
      echo "<script> Swal.fire('Todos los Campos son obligatorios')</script>";
    }
    else{

      echo "<script> 
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
      
        Toast.fire({
          icon: 'success',
          title: 'Login Exitoso'
        })
      
      </script>";
    }
  }


?>