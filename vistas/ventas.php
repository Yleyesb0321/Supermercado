<?php

session_start();
if (!isset($_SESSION['Rol'])) {
  header("Location: ../index.php");
}

include('../modelo/conectar_filtro.php');

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon"><!--? Agregamos la imagen de la pagina-->
  <link href="../css/ventas.css" rel="stylesheet">


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

  <main>
    <!--Seccion para agregar un cliente a la factura-->
    <section class="container">
      <div class="ventas_container">
        <div class="ventas_conta">
          <h2 class="ventas_title">Ventas<br><br></h2>
          <button type="reset" class="btn_venta"><box-icon name='message-square-add' color='#ffffff' class="mas">
            </box-icon>Nueva Venta</button>
        </div>
        <div class="space">
          <button type="submit" name="buscar" class="btn_buscar"><box-icon name='search-alt' color='#ffffff'></box-icon>Buscar</button>
          <a href="#"><button class="btn_registrar"><box-icon type='solid' name='user-plus' color='#ffffff'></box-icon>Registrar</button></a>
        </div>
        <div class="container_factura">
          <div class="container_ventas">

            <div class="container_productos">

              <h2 class="productos_title">Agregar Productos a la compra</h2>

              <div class="conta_tabla">

                <form method="post" class="forma">
                  <div class='login-form'>
                    <label class="label">Cliente</label>
                    <!--Seccion de la Factura-->
                    <select name="factura" class="select">
                      <option>-Seleccione-</option>

                      <!-- Muestra a los Clientes y ID de la factura-->
                      <?php

                      include '../controlador/mostrarFact.php';

                      foreach ($facturas as $key) :
                        echo "<option class='opt' value=" . $key['idFactura'] . ">" . $key['CliNombre'] . " -- "  . $key['idFactura'] . "</option>";
                      endforeach;
                      ?>

                    </select>

                  </div>

                  <!--Seccion Empleados de la Factura-->
                  <div class='login-form'>
                    <label class="labelC">Cajero</label>
                    <select name="cajero" id="" class="select">
                      <option>-Seleccione-</option>

                      <?php
                      include '../controlador/mostrarCajero.php';
                      foreach ($cajeros as $valor) :

                        echo "
                              <option class='opt' value=" . $valor['idCajero'] . ">" . $valor['idCajero'] . " -- " . $valor['EmpNombre'] . "</option>
                              </div>";

                      endforeach;
                      ?>
                    </select>

                  </div>

                  <div class='login-form'>
                    <label class="labelP">Producto</label>
                    <!--Seccion Productos de la Factura-->
                    <select name="producto" class="select">
                      <option>-Seleccione-</option>
                      <?php
                      include '../controlador/mostrarProd.php';
                      foreach ($ver as $mostrar) :

                        echo "<option class='opt' value=" . $mostrar['idProducto'] . ">" . $mostrar['ProNombre_Producto'] . "</option>";
                      endforeach;
                      ?>
                    </select>
                  </div>
                  <div class="login-form">
                    <input type="number" name="cantidad_producto" required><span class="barra"></span>
                    <label for="">Cantidad Producto</label>
                  </div>
                  <div class="login-form">
                    <button type="submit" name="generar_venta" class="btn_facturar"><box-icon type='solid' name='file' color='#ffffff'></box-icon>Agregar Producto</button>
                  </div>
                </form>

                <?php include '../controlador/registrarVenta.php';  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!--MODAL REGISTRAR-->

    <section class="modalRegistrar">
      <div id="registro">
        <div class="modal_registar">
          <div class="modal_body">
            <div class="modal_header">
              <h1 class="modal_title">Registro de Clientes</h1>
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
    <!--FIN REGISTRAR-->

    <!--MODAL DE FACTURA-->
    <section class="modalFacturarCliente">
      <div id="facturar">
        <div class="modal_facturar">
          <div class="modal_body_facturar">
            <div class="modal_header">
              <h1 class="modal_title">FACTURAR A:</h1>
            </div>
            <form method="POST" class="form_login">
              <div class="login-form">
                <label>Cliente</label>
                <select name="factura_cli" class="select">

                  <?php
                  include '../controlador/mostrarCli.php';

                  foreach ($clientes as $verCli) :

                    echo "<option class='opt' value=" . $verCli['idCliente'] . ">" . $verCli['CliNombre'] . "</option>";
                  endforeach;  ?>
                </select>
              </div>

              <div class="login-form">
                <input type="date" name="Fecha" required><span class="barra"></span>
                <label>Fecha</label>
              </div>

              <div>
                <button type="submit" name="guardar" class="btn_guardar">Guardar</button>
              </div>

              <?php include '../controlador/registrarFact.php'; ?>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--FIN DE FACTURA-->


    <!--SECCION DETALLES DE COMPRA-->
    <section class="modalDetFactura">
      <div id="factura">
        <div class="modal_detfactura">
          <div class="modal_body">
            <div class="modal_header">
              <h1 class="modal_title">SUPERMERCADOS MEGAPLUS <box-icon name='plus-medical' type='solid' color="#ffffff"></box-icon> <br> NIT 890.678.945-4</h1>
              <h4>AV SIEMPRE VIVA # 1-742 SPRINGFIELD <br>TEL: (1) 6752390 </h4>
              <h3 class="modal_subtitle">FACTURA DE VENTA: </h3>

              <form method="post" class="form_login">
                <select name="idFactura" id="">
                  <!-- Logica para mostrar los Productos-->
                  <?php


                  foreach ($facturas as $key) :

                    echo "<option value=" . $key['idFactura'] . ">" . $key['CliNombre'] . " -- " . $key['idFactura'] . "</option>";
                  endforeach;
                  ?>
                </select>
                <button type="submit" name="facturaId">Consultar Factura</button>
              </form>


            </div>

            <form action="" method="post" class="form_login">
              <input type="hidden" name="id" id="update_id">

              <p class="date">Fecha: <?php echo date("Y-m-d"); ?><br> Hora: <?php echo date("H:i:s"); ?></p>

              <section class="factura">
                <div class="login-form">
                  <div class="info_cajero">
                    <h4>Cajero: <?php echo $_SESSION['EmpNombre'] . "   "; ?></h4>
                  </div>
                </div>

                <div class="info_cliente">

                  <!--Para Filtrar los clientes-->
                  <?php
                  include '../controlador/mostrarFacturaId.php';
                  include '../controlador/mostrarCli.php';
                  foreach ($clientes as $filtrar) :
                    echo "<input type='hidden' name='id' value=" . $filtrar['idCliente'] . ">";

                    echo $filtrar['CliNombre'];
                    echo $filtrar['CliApellido'] . " ----- ";
                    echo $filtrar['CliIdentificacion'] . " ----- ";
                    echo $filtrar['CliTelefono'];


                  endforeach;  ?>


                  <h4>DETALLES DE LA COMPRA </h4>
                  <p>===========================================================</p>

                  <table class="table">
                    <thead class="table_head">
                      <tr>
                        <th>Articulo</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>P. Unit</th>
                        <th>Valor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!--Para Filtrar x ID de las facturas y LOGICA para realizar la operacion Matematica-->
                      <?php
                      $facturasId = [];
                      $cantidad = 0;
                      $total = 0;
                      $precio = 0;
                      include('../controlador/mostrarFacturaId.php');

                      if ($facturasId > 0) {

                        foreach ($facturasId as $filtro) :
                          echo "<br>";
                          //echo $_SESSION['EmpNombre'];

                          echo "<tr>";
                          echo "<td>" . $filtro['ProNombre_Producto'] . "</td>";
                          echo "<td>" . $filtro['ProDescripcion_Producto'] . "</td>";
                          echo "<br>";
                          echo "<td>" . $filtro['VenCantidad'] . "</td>";
                          echo "<br>";
                          echo "<td>" . $filtro['ProPrecio_Producto'] . "</td>";
                          echo "<br>";

                          echo "<br>";

                          echo "<td>" . $subtotal = $filtro['ProPrecio_Producto'] * $filtro['VenCantidad'] . "</td>";

                          $cantidad += $filtro['VenCantidad'];
                          $total += intval($subtotal);

                          echo "</tr>"
                      ?>

                      <?php endforeach;


                        //echo "<p>Total : " . $total . "</p>";

                      }
                      ?>




                    </tbody>

                  </table>
                  <p>Total: <?php echo intval($total); ?></p>

                </div>

                <div>
                  <button type="submit" name="pagar" class="btn_registrar"><box-icon name='math' type='solid' color="#ffffff"></box-icon>Pagar</button>
                  <a href="../vistas/ventas.php"><button type="button" class="btn_cancelar">Cancelar Venta</button></a>
                </div>
              </section>
            </form>

          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include '../inc/footer.php'; ?>


  <!-- Aqui van los script de JS-->
  <script src="../js/buscar_cliente.js"></script>



</body>

</html>