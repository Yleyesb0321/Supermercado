<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../Img/logo.png" type="image/x-icon"><!--? Agregamos la imagen de la pagina-->
  <link href="../css/principal.css" rel="stylesheet">

  <!--Sweet Alert 2-->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


  <title>Supermercados Megaplus</title>
</head>

<body>
  
  <div class="contenedor_loader">
    <div class="loader"></div>
  </div>

  <header>
    <h1 class="logo"> SUPERMERCADOS <br> MEGAPLUS </h1>
    <nav class="nav">
      <a href="cliente.php">Clientes</a>
      <a href="factura.php">Factura</a>
      <a href="producto.php">Productos</a>
      <a href="pagos.php">Pagos</a>
      <a href="caja.php">Cuadre Caja</a>
      <button class="btn_logout">Cerrar Sesión</button>
    </nav>
  </header>

  <footer>
    <hr>
    <img class="logos" src="../Img/logo.png">
    <p class="copy">&copy Supermercados Megaplus 2022 || Todos los derechos reservados ❤ <br> <span class="ela">Claudia Padilla // Joan Horta // Yecid Leyes</span></p>
  </footer>

  <script src="../js/logout.js"></script>
</body>

</html>