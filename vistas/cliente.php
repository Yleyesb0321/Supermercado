<?php
//Iniciamos la DB para consultar la tabla de clientes
include_once '../modelo/conectar_cliente.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM empleados";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$clientes = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../Img/logo.png" type="image/x-icon"><!--? Agregamos la imagen de la pagina-->
  <link href="../css/cliente.css" rel="stylesheet">

  <!--Sweet Alert 2-->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


  <title>Registro Clientes</title>
</head>

<body>

  <header>
    <img src="../Img/logo.png" alt="logo" class="logo_img">
    <h1 class="logo"> SUPERMERCADOS MEGAPLUS </h1>
    <nav class="nav">
      <div class="container_container">
        <div class="container_texts">
          <h2 class="container_subtitle">Clientes</h2>
          <button class="btn_logout">Cerrar</button>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="container">
      <div class="container_container">
        <div class="container_login">
          <h2 class="login_title">Registro de Clientes</h2>
          <form action="" method="post" class="form_login">
            <div class="login-form">
              <input type="text" name="nombre" id="name"><span class="barra"></span>
              <label for="">Nombres</label>
            </div>

            <div class="login-form">
              <input type="text" name="apellido" id="password"><span class="barra"></span>
              <label for="">Apellidos</label>
            </div>

            <div class="login-form">
              <input type="number" name="documento" id="rol"><span class="barra"></span>
              <label for="">Documento</label>
            </div>

            <div class="login-form">
              <input type="number" name="telefono" id="rol"><span class="barra"></span>
              <label for="">Telefono</label>
            </div>

            <div class="login-form">
              <input type="email" name="email" id="rol"><span class="barra"></span>
              <label for="">Correo</label>
            </div>

            <div class="login-form">
              <label>Cajero</label>
              <select name="idEmpleado">
                <option>---Seleccione---</option>
                <?php
                foreach ($clientes as $filtro) {
                ?>
                  <option><?php echo $filtro['idEmpleado'] ?> -- <?php echo $filtro['EmpNombre'] ?></option>
                <?php
                }
                ?>
              </select><br><br>
            </div>

            <div>
              <button type="submit" name="btn_registrar" class="btn_link">Registrar</button>
            </div>

            <?php include '../controlador/registrar.php' ?>

          </form>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <hr>
    <img class="logos" src="../Img/logo.png">
    <p class="copy">&copy Supermercados Megaplus 2022 || Todos los derechos reservados ❤ <br>
      <span class="ela">Claudia Padilla // Joan Horta // Yecid Leyes</span>
    </p>
  </footer>


  <script src="../js/logout_clientes.js"></script>
</body>

</html>