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
  <link href="../css/producto.css" rel="stylesheet">


  <!--Sweet Alert 2-->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

  <!--Iconos de BOX ICONS-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <title>Productos</title>

</head>

<body>

  <header>
    <img src="../Img/logo.png" alt="logo" class="logo_img">
    <h1 class="logo"> SUPERMERCADOS MEGAPLUS </h1>
    <div class="user">
      <h3><?php echo $_SESSION['EmpNombre']; ?> - <?php echo $_SESSION['Rol']?></h3>
    </div>
    <nav class="nav">
      <div class="container_container">
        <div class="container_texts">
          <h2 class="container_subtitle">Productos</h2>
          <button class="btn_logout" title="Cerrar"><a href="../vistas/principal.php"><box-icon name='log-out-circle' flip='horizontal' color='#ffffff' class="img"></box-icon></a></button>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="container">
      <div class="container_container">
        <h2 class="container_producto">Consulta de Productos</h2><br>
        <form action="" method="post" class="form_login">
          <div class="container_productos">
            <div class="login-form">
              <table>
                <tr>
                  <td>
                    <label>Ingrese el nombre del producto para realizar la consulta</label>
                    <input type="text" name="ConsultaProducto">
                  </td>
                  <br>
                  <td colspan="2"><br>
                    <button type="submit" name="btn_consultar" class="btn_link">Consultar</button>
                  </td>
                </tr>
              </table>
              <td colspan="2"></td>
              <br>

              <!-- Modulo Consultas -->
              <?php
              include("../controlador/consulta_producto.php");
              ?>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>

  <?php include '../inc/footer.php'; ?>

</body>

</html>