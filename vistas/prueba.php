<?php
/*
session_start();
if (!isset($_SESSION['Rol'])) {
  header("Location: ../index.php");
}
*/
include('../modelo/conectar_filtro.php');

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon"><!--? Agregamos la imagen de la pagina-->
  <!--<link href="../css/ventas.css" rel="stylesheet">-->


  <!--Sweet Alert 2-->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.all.min.js"></script>

  <!--Iconos de BOX ICONS-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


  <title>Ventas</title>


</head>

<body>
  <header>
    <img src="../Img/logo.png" alt="logo" class="logo_img">
    <h1 class="logo"> SUPERMERCADOS MEGAPLUS </h1>
    <div class="user">
      <h3><?php echo $_SESSION['EmpNombre']; ?> - <?php echo $_SESSION['Rol'] ?></h3>
    </div>
    <nav class="nav">
      <div class="container_container">
        <div class="container_texts">
          <h2 class="container_subtitle">Ventas</h2>
          <a href="../vistas/cajeros.php"><button class="btn_logout" title="Cerrar"><box-icon name='log-out-circle' flip='horizontal' color='#ffffff' class="img"></box-icon>Atras</button></a>
        </div>
      </div>
    </nav>
  </header>

// crear la factura

  <!--SECCION DE VENTAS-->
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>nombre</th>
        <th>cantidad</th>
        <th>precio</th>
      </tr>
    </thead>
    <tbody>
      <?php

      include '../controlador/mostrarProd.php';
      foreach ($ver as $mostrar) :

      ?>

        <tr>
          <td class="lista"><?php echo $mostrar['idProducto'] ?></td>
          <td class="lista"><?php echo $mostrar['ProNombre_Producto'] ?></td>
          <td class="lista"><?php echo $mostrar['ProCantidad_Producto'] ?></td>
          <td class="lista"><?php echo $mostrar['ProPrecio_Producto'] ?></td>

        </tr>
      <?php endforeach;  ?>
    </tbody>
  </table>

<!--FIN SECCION DE VENTAS-->

<!--MODAL DE FACTURA-->
<section class="modalFacturar">
      <div id="registro">
        <div class="modal_facturar">
          <div class="modal_body">
            <div class="modal_header">
              <h1 class="modal_title">FACTURA DE VENTA</h1>
            </div>
            <form action="" method="post" class="form_login">
              <input type="hidden" name="id" id="update_id">

              <div class="login-form">
                <input type="text" name="nombre" id="name" required><span class="barra"></span>
                <label for="">Nombres</label>
              </div>

              <div class="login-form">
                <input type="text" name="apellido" id="apellido" required><span class="barra"></span>
                <label for="">Apellidos</label>
              </div>

              <div class="login-form">
                <input type="number" name="documento" id="documento" required><span class="barra"></span>
                <label for="">Documento</label>
              </div>

              <div class="login-form">
                <input type="number" name="telefono" id="telefono" required><span class="barra"></span>
                <label for="">Telefono</label>
              </div>

              <div class="login-form">
                <input type="email" name="email" id="email" required><span class="barra"></span>
                <label for="">Correo</label>
              </div>

              <div class="login-form">
                <label>Cajero</label>
                <select name="idEmpleado" class="selec" required>
                  <option>---Seleccione---</option>
                  <?php
                  include '../controlador/mostrarEmp.php';
                  foreach ($clientes as $filtro) {
                  ?>
                    <option class="opt"><?php echo $filtro['idEmpleado'] ?> -- <?php echo $filtro['EmpNombre'] ?></option>
                  <?php
                  }
                  ?>
                </select><br><br>
              </div>

              <div>
                <a href="#"><button type="button" class="btn_cancelar">Cancelar</button></a>
                <button type="submit" name="registrar" class="btn_guardar">Registrar</button>
              </div>
              <?php include '../controlador/registrarCli.php' ?>
            </form>
          </div>
        </div>
      </div>
    </section>
<!--FIN DE FACTURA-->

</body>

</html>