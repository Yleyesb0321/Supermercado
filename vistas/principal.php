<?php
session_start();
if (!isset($_SESSION['Rol'])) {
  header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon"><!--? Agregamos la imagen de la pagina-->
  <link href="../css/principal.css" rel="stylesheet">

  <!--Sweet Alert 2-->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

  <!--Iconos de BOX ICONS-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


  <title>Pagina Principal</title>



</head>

<body>
  <header>
    <img src="../Img/logo.png" alt="logo" class="logo_img">
    <h1 class="logo"> SUPERMERCADOS MEGAPLUS </h1>
    <div class="user">
      <h3><?php echo $_SESSION['EmpNombre']; ?> - <?php echo $_SESSION['Rol']?></h3>
    </div>
    <nav class="nav">
      <a href="producto_jefes.php" class="ancor">Productos</a>
      <a href="devolucion.php" class="ancor">Devoluciones</a>
      <a href="caja.php" class="ancor">Cuadre Caja</a>
      <button class="btn_logout" title="Cerrar Sesión"><a href="../controlador/sesion_out.php"><box-icon name='power-off' color='#ffffff' class="img"></box-icon></a></button>
    </nav>
  </header>

  <main>
    <section class="container">
      <h2>Hola, <?php echo $_SESSION['EmpNombre']; ?>!</h2>
      <p class="container_paragraph">Bienvenido Jefe de Departamento</p>
    </section>
  </main>

  <footer>
    <hr>
    <img class="logos" src="../Img/logo.png">
    <p class="copy">&copy Supermercados Megaplus 2022 || Todos los derechos reservados ❤ <br> <span class="ela">Claudia Padilla // Joan Horta // Yecid Leyes</span></p>
  </footer>

</body>

</html>