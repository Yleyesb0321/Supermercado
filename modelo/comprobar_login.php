<?php


  try {

    //Se crea la conexion a la DB con PDO
    $conex = new PDO("mysql:host=localhost; dbname=supermegaplus", "root", "");

    //Se establecen las propiedades de la conexion
    $conex->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Se crea la comprobacion si el usuario existe en la DB
    $upass = "SELECT * FROM usuarios_pass WHERE Usuarios = :login AND Clave = :password AND Rol = :rol";

    //Se crea la consulta con los marcadores
    $resultado = $conex->prepare($upass);

    //Se almacena los roles del usuario
    $Usuario = htmlentities(addslashes($_POST['usuario']));
    $Clave = htmlentities(addslashes($_POST['clave']));
    $Rol = htmlentities(addslashes($_POST['rol']));

    //Se relacionan los marcadores con la funcion 'bindValue'
    $resultado -> bindValue(":login", $Usuario);
    $resultado -> bindValue(":password", $Clave);
    $resultado -> bindValue(":rol", $Rol);

    //ejecutamos la instruccion
    $resultado -> execute();

    //Creamos la condicional para validar la existencia del usuario
    $numero_registro = $resultado->rowCount();
    if($numero_registro!=0){
      echo "<h2>Conexion Exitosa</h2>";
    }else{
      echo "<script>
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Lo sentimos, el Usuario no existe en nuestra Base de datos!',
      })
      </script>";
    };

  } 
  catch (Exception $th) {

    die ("Error de Conexion: ". $th->getMessage());
  }
