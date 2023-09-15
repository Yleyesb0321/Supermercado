
<?php include '../modelo/conex.php';?>

<body>
  <div id="edicion" class="contaModal modal">
    <div class="modal_editar">
      <div class="modal_header">
        <h1 class="modal_title">Editar Cliente</h1>
      </div>
      <div class="modal_body">
        <form action="" method="post" class="form_login">
          <?php include '../controlador/editar.php' ?>
          <?php include '../controlador/actualizar.php' ?>


          <input type="hidden" name="id" value="<?php echo $filtro['idCliente'] ?>">

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
            <a href="../vistas/cliente.php"><button type="button" class="btn_cancelar">Cancelar</button></a>
            <button type="submit" name="actualizo" class="btn_guardar">Actualizar</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</body>