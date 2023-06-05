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


  <title>Supermercados Megaplus Clientes</title>
</head>

<body>

  <header>
    <h1 class="logo"> SUPERMERCADOS <br> MEGAPLUS </h1>
    <nav class="nav">
      <a href="cliente.php">Clientes</a>
      <button class="btn_logout">Cerrar</button>
    </nav>
  </header>

  <main>
    <section class="container">
      <div class="container_container">
        <div class="container_login">
          <h2 class="login_title">Registro de Clientes</h2>
          <form action="" method="post" class="form_login">
            <div class="login-form">
              <input type="text" name="nombre" id="name"><span class="barra"></span>
              <label for="">Nombres</label>
            </div>

            <div class="login-form">
              <input type="text" name="apellido" id="password"><span class="barra"></span>
              <label for="">Apellidos</label>
            </div>

            <div class="login-form">
              <input type="number" name="documento" id="rol"><span class="barra"></span>
              <label for="">Documento</label>
            </div>

            <div class="login-form">
              <input type="number" name="telefono" id="rol"><span class="barra"></span>
              <label for="">Telefono</label>
            </div>

            <div class="login-form">
              <input type="email" name="email" id="rol"><span class="barra"></span>
              <label for="">Correo</label>
            </div>

            <button id="boton" name="btn_Registrar" type="submit" class="btn_link">Registrar</button>

          </form>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <hr>
    <img class="logos" src="../Img/logo.png">
    <p class="copy">&copy Supermercados Megaplus 2022 || Todos los derechos reservados ❤ <br> <span class="ela">Claudia Padilla // Joan Horta // Yecid Leyes</span></p>
  </footer>

  
  <script src="../js/logout_clientes.js"></script>
</body>

</html>