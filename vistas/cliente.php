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

  <link rel="shortcut icon" href="../Img/logo.png" type="image/x-icon"><!--? Agregamos la imagen de la pagina-->
  <link href="../css/cliente.css" rel="stylesheet">

  <!--Sweet Alert 2-->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

  <!--Iconos de BOX ICONS-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


  <title>Registro Clientes</title>
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
          <h2 class="container_subtitle">Clientes</h2>
          <a href="../vistas/cajeros.php"><button class="btn_logout" title="Cerrar"><box-icon name='log-out-circle' flip='horizontal' color='#ffffff' class="img"></box-icon>Atras</button></a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="container">
      <div class="container_container">
        <div class="cliente_conta">
          <h2 class="cliente_title">Listado de Clientes</h2>
          <a href="#"><button class="btn_registrar"><box-icon type='solid' name='user-plus' color='#ffffff'></box-icon>Registrar</button></a>
        </div>

        <div class="container_lista">
          <table id="tablaClientes" class="table">
            <thead class="table_head">
              <tr>
                <th class="colum">Item</th>
                <th class="colum">Nombres</th>
                <th class="colum">Apellidos</th>
                <th class="colum">Identificación</th>
                <th class="colum">Telefono</th>
                <th class="colum">Correo</th>
                <th class="colum">Editar</th>
                <th class="colum">Eliminar</th>
              </tr>
            </thead>

            <tbody>

              <!-- Logica para filtrar los Clientes-->
              <?php

              include '../controlador/mostrarCli.php';

              foreach ($clientes as $filtro) {
              ?>
                <tr>
                  <td class="lista"><?php echo $filtro['idCliente'] ?></td>
                  <td class="lista"><?php echo $filtro['CliNombre'] ?></td>
                  <td class="lista"><?php echo $filtro['CliApellido'] ?></td>
                  <td class="lista"><?php echo $filtro['CliIdentificacion'] ?></td>
                  <td class="lista"><?php echo $filtro['CliTelefono'] ?></td>
                  <td class="lista"><?php echo $filtro['CliCorreo'] ?></td>

                  <td>
                    <form method='POST'>
                      <!-- cambiar name id -->
                      <input type="hidden" name="id" value="<?php echo $filtro['idCliente'] ?>">
                      <a href="#"><button class="btn_editar"><box-icon type='solid' name='edit' color='#A9A9A9'></box-icon></button></a>
                    </form>
                  </td>

                  <td>
                    <form method="post">
                      <input type="hidden" name="id" value="<?php echo $filtro['idCliente'] ?>">
                      <a href="#"><button class="btn_borrar"><box-icon name='trash' color='#A9A9A9'></box-icon></button></a>
                    </form>
                  </td>
                </tr>

              <?php
              }
              ?>

            </tbody>

          </table>
        </div>
      </div>

    </section>

    <!-- SECCIONES DE LOS MODALES -->
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
                <label for="name">Nombres</label>
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

    <!--MODAL EDITAR-->

    <section class="modalEditar">

      <div id="edicion">
        <div class="modal_editar">
          <div class="modal_bodyEditar">
            <div class="modal_header">
              <h1 class="modal_title">Actualizar Cliente</h1>
            </div>

            <form action="" method="post" class="form_login">

              <!-- Logica para filtrar los Clientes-->
              <?php
              //crear un controlador para filtrar el cliente por id
              include '../controlador/mostrarCli.php';
              foreach ($clientes as $filtro) {
              ?>
                <input type="hidden" name="idCliente" value="<?php echo $filtro['idCliente'] ?>">
              <?php
              }
              ?>
              <div class="login-form">
                <input type="text" name="nombre" value="<?php echo $filtro['CliNombre'] ?>"><span class="barra"></span>
                <label for="">Nombres</label>
              </div>

              <div class="login-form">
                <input type="text" name="apellido" value="<?php echo $filtro['CliApellido'] ?>"><span class="barra"></span>
                <label for="">Apellidos</label>
              </div>

              <div class="login-form">
                <input type="number" name="documento" value="<?php echo $filtro['CliIdentificacion'] ?>"><span class="barra"></span>
                <label for="">Documento</label>
              </div>

              <div class="login-form">
                <input type="number" name="telefono" value="<?php echo $filtro['CliTelefono'] ?>"><span class="barra"></span>
                <label for="">Telefono</label>
              </div>

              <div class="login-form">
                <input type="email" name="email" value="<?php echo $filtro['CliCorreo'] ?>"><span class="barra"></span>
                <label for="">Correo</label>
              </div>

              <div>
                <a href="#"><button type="button" class="btn_cancelarEditar">Cancelar</button></a>
                <button type="submit" name="actualizo" class="btn_guardar">Actualizar</button>
              </div>


            </form>
            <?php
            include '../controlador/editarCli.php';
            include '../controlador/actualizarCli.php'
            ?>
          </div>
        </div>
      </div>
    </section>

    <!--MODAL ELIMINAR-->

    <section class="modalEliminar">
      <div id="elimina">
        <div class="modal_eliminar">
          <div class="modal_bodyEliminar">
            <div class="modal_header">
              <h1 class="modal_title">Deseas Eliminar los Datos Seleccionados?</h1>
            </div>
            <form action="" method="post" class="form_login">

              <!-- Logica para filtrar los Clientes-->
              <?php
              include '../controlador/eliminarCli.php';
              foreach ($clientes as $filtro) {
              ?>
                <input type="hidden" name="id" value="<?php echo $filtro['idCliente'] ?>">

              <?php
              }
              ?>

              <div>
                <a href="#"><button type="button" class="btn_cancelarEliminar">Cancelar</button></a>
                <button type="submit" name="eliminar" class="btn_eliminar">Eliminar</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Aqui se incluye el footer-->
  <?php include '../inc/footer.php'; ?>


  <!-- Aqui van los script de JS-->
  <script src="../js/modales.js"></script>


</body>

</html>