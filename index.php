<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon"><!--? Agregamos la imagen de la pagina-->
  <link href="./css/index.css" rel="stylesheet">


  <!--Sweet Alert 2-->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


  <title>Supermercados Megaplus || Login</title>

</head>

<body>

  <header>
    <img src="Img/logo.png" alt="logo" class="logo_img">
    <h1 class="logo"> SUPERMERCADOS MEGAPLUS </h1>
  </header>

  <main>
    <section class="container">
      <div class="container_container">
        <div class="container_texts">
          <h2 class="container_subtitle">Bienvenidos <br></h2>
          <nav class="nav">
            <button class="btn_login">Iniciar Sesión</button>
          </nav>
        </div>

        <!--Maneja el div del inicio de sesion-->
        <div class="container_login">
          <h2 class="login_title">Iniciar Sesión</h2>
          <form action="" method="POST" class="form_login">

            <!--Maneja el input de usuario-->
            <div class="login-form">
              <input type="text" name="Usuarios" id="name" autocomplete="off" required>
              <span class="barra"></span>
              <label for="name">Usuario</label>
            </div>

            <!--Maneja el input del Password-->
            <div class="login-form">
              <input type="password" name="Clave" id="password" autocomplete="off" required>
              <span class="barra"></span>
              <label for="password">Password</label>
            </div>

            <!--Maneja el input del Rol-->
            <div class="login-form">
              <select name="Rol" id="rol" class="selec" required>
                <option>-Seleccione-</option>
                <option class="opt">CJ</option>
                <option class="opt">JD</option>
                <option class="opt">AX</option>
              </select>
              <label for="rol">Rol</label>

            </div>

            <!--Maneja el boton de ingresar-->
            <button type="submit" id="boton" name="btn_Ingresar" class="btn_link">Ingresar</button>

            <p name="olvidar" class="forget"><a>¿Olvidaste tu Contraseña?</a></p>

          </form>

          <!--Maneja el archivo de validacion del usuario-->
          <?php include './controlador/validar_login.php'; ?>
        </div>

      </div>
    </section>
  </main>

  <!--incluye el footer de la pagina-->
  <?php include './inc/footer.php'; ?>

  <!-- Aqui van los script de JS-->
  <script src="./js/login.js"></script>

</body>

</html>