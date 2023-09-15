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

  <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon"><!--? Agregamos la imagen de la pagina-->
  <link href="../css/cajeros.css" rel="stylesheet">


  <!--Sweet Alert 2-->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

  <!--Iconos de BOX ICONS-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <title>Cajeros</title>

</head>

<body>

  <header>
    <img src="../Img/logo.png" alt="logo" class="logo_img">
    <h1 class="logo"> SUPERMERCADOS MEGAPLUS </h1>
    <div class="user">
      <h3><?php echo $_SESSION['EmpNombre']; ?> - <?php echo $_SESSION['Rol'] ?></h3>
    </div>
    <nav class="nav">
      <a href="cliente.php" class="ancor">Clientes</a>
      <a href="ventas.php" class="ancor">Ventas</a>
      <a href="producto.php" class="ancor">Productos</a>
      <a href="pagos.php" class="ancor">Pagos</a>
      <button class="btn_logout" title="Cerrar Sesión"><a href="../controlador/sesion_out.php"><box-icon name='power-off' color='#ffffff' class="img"></box-icon></a></button>

    </nav>
  </header>

  <div class="container_texts">
    <h2>Hola, <?php echo $_SESSION['EmpNombre']; ?>!</h2>
    <p class="container_paragraph">Selecciona la opción deseada.</p>
  </div>

  <?php include '../inc/footer.php'; ?>

</body>

</html>