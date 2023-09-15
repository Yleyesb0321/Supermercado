<?php
//Iniciamos la DB para crear el listado
include_once '../modelo/conectar_filtro.php';

$consulta = "SELECT * FROM ventas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$cajeros = $resultado->fetchAll(PDO::FETCH_ASSOC);

session_start();
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon"><!--? Agregamos la imagen de la pagina-->
  <link href="../css/caja.css" rel="stylesheet">


  <!--Sweet Alert 2-->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

  <!--Iconos de BOX ICONS-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <title>Cajas</title>

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
          <h2 class="container_subtitle">Cajas</h2>
          <button class="btn_logout" title="Cerrar"><a href="../vistas/principal.php"><box-icon name='log-out-circle' flip='horizontal' color='#ffffff' class="img"></box-icon></a></button>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="container">
      <div class="container_container">
        <h2 class="caja_container">Cuadre de Cajas<br><br></h2>


        <div class="form_login">
          <div class="login-form">

            <form action="" method="post" class="form_login">
              <div class="container_caja">

                <div class="login-form">
                  <table>
                    <tr>
                      <td>
                        <label>Ingrese el nombre del cajero a consultar</label>
                        <input type="text" name="ConsultaCajero">
                      </td>
                      <br>
                      <td colspan="2"><br>
                        <button type="submit" name="btn_buscar" class="btn_link">Buscar</button>
                      </td>
                    </tr>
                  </table>
                  <td colspan="2"></td>
                  <br>

                  <!-- Modulo Consultas -->
                  <?php
                  include("../controlador/conCaja.php");
                  ?>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      </div>
    </section>
  </main>

  <?php include '../inc/footer.php'; ?>

</body>

</html>