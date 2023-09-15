<?php
//Iniciamos la DB para consultar la tabla de clientes
include_once '../modelo/conectar_filtro.php';

?>

<head>
  <link href="../css/modal_reg_cliente.css" rel="stylesheet">
</head>

<body>
  <div id="elimina" class="contaModal modal">
    <div class="modal_eliminar">
      <div class="modal_header">
        <h1 class="modal_title">Deseas Eliminar los Datos Seleccionado?</h1>
      </div>
      <div class="modal_body">
        <form action="" method="post" class="form_login">
          <input type="hidden" name="id" value="<?php echo $filtro['idCliente'] ?>">

          <div>
            <a href="../vistas/cliente.php"><button type="button" class="btn_cancelar">Cancelar</button></a>
            <button type="submit" name="eliminar" class="btn_eliminar">Eliminar</button>
          </div>
          <?php include '../controlador/eliminar.php' ?>
        </form>

      </div>
    </div>
  </div>
</body>