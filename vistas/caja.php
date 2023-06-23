<?php
//Iniciamos la DB para crear el listado
include_once '../modelo/conectar_cliente.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM ventas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$cajeros = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../Img/logo.png" type="image/x-icon"><!--? Agregamos la imagen de la pagina-->
  <link href="../css/caja.css" rel="stylesheet">

  <!--Sweet Alert 2-->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


  <title>Cuadre Cajas</title>
</head>

<body>

  <header>
    <img src="../Img/logo.png" alt="logo" class="logo_img">
    <h1 class="logo"> SUPERMERCADOS MEGAPLUS </h1>
    <nav class="nav">
      <div class="container_container">
        <div class="container_texts">
          <h2 class="container_subtitle">Cajas</h2>
          <button class="btn_logout">Cerrar</button>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="container">
      <div class="container_container">
        <h2 class="caja_container">Cuadre de Cajas<br><br></h2>


        <div class="container_caja">
          <div class="form_login">
            <div class="login-form">
              <h2 class="caja_subtitle">Listado de ventas</h2>
              <table id="tablaVentas">
                <thead class="t-head">
                  <tr>
                    <th class="col">Id Venta</th>
                    <th class="col">Id Cajero</th>
                    <th class="col">Nombre Cajero</th>
                    <th class="col">Productos</th>
                    <th class="col">Fecha</th>
                    <th class="col">Hora</th>
                    <th class="col">Precio</th>
                    <th class="col">Cantidad</th>
                    <th class="col">Total</th>
                  </tr>
                </thead>
                <tbody class="t-body">
                  <!-- Logica para filtrar datos de la tabla ventas	-->
                  <?php 
                    foreach($cajeros as $filtro){
                      ?>
                      <tr>
                        <td><?php echo $filtro['idVenta']?></td>
                        <td><?php echo $filtro['idCajero']?></td>
                        <td><?php echo $filtro['VenNombre_Cajero']?></td>
                        <td><?php echo $filtro['VenProducto']?></td>
                        <td><?php echo $filtro['VenFecha']?></td>
                        <td><?php echo $filtro['VenHora']?></td>
                        <td><?php echo $filtro['VenPrecio']?></td>
                        <td><?php echo $filtro['VenCantidad']?></td>
                        <td><?php echo $filtro['VenTotal']?></td>
                      </tr>
                      
                      <?php
                    }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
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

  <script src="../js/cerrar.js"></script>

</body>

</html>