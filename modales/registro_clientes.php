<?php
//Iniciamos la DB para consultar la tabla de clientes
include_once '../modelo/conectar_filtro.php';


$consulta = "SELECT * FROM empleados";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$clientes = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>

<head>
  <link href="../css/modal_reg_cliente.css" rel="stylesheet">
</head>

<body>
  <div id="registro" class="modal">
    <div class="modal_registar">
      <div class="modal_header">
        <h1 class="modal_title">Registro de Clientes</h1>
      </div>
      <div class="modal_body">
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
              foreach ($clientes as $filtro) {
              ?>
                <option class="opt"><?php echo $filtro['idEmpleado'] ?> -- <?php echo $filtro['EmpNombre'] ?></option>
              <?php
              }
              ?>
            </select><br><br>
          </div>


          <div>
            <a href="../vistas/cliente.php"><button type="button" class="btn_cancelar">Cancelar</button></a>
            <button type="submit" name="btn_registrar" class="btn_guardar">Registrar</button>
          </div>
          <?php include '../controlador/registrar.php' ?>
        </form>

      </div>
    </div>
  </div>

  
</body>