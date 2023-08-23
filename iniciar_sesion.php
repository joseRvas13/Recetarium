<!DOCTYPE html>
<html lang="es">
<head>
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="estilos/iniciar.css">

  <title>Formulario de inicio de sesión</title>
</head>
<body>
  <header>
    <div class="header-content">
      <img src="img/Logo.jpeg" alt="" style="border-radius: 10px; width: 70px; height: 70px; z-index: 1;">
      <div class="logo">
        <h1>Recetarium<b>.com</b></h1>
      </div>
      <div class="menu">
        <nav>
          <ul>
            <li class="menu-selected"><a href="index.php">inicio</a></li>
            <li><a href="#">contacto</a></li>
            <li><a href="iniciar_sesion.php">iniciar sesion</a></li>
          </ul>
        </nav>
        <div class="icon-menu">&#9776;</div>
      </div>
    </div>
  </header>
  <br>
  <div class="container">
    <h2>Iniciar sesión</h2>
    <form action="" method="POST">
      <label for="username">Correo electrónico:</label>
      <input type="text" id="username" name="username" placeholder="Ingresa tu correo electrónico" required>
      
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
      <br>
      <button type="submit">Iniciar sesión</button><Br></Br>
      
      <p>¿Aún no tienes una cuenta? Haz clic en el botón para crearla...</p>
      <br>
      <button><a href="crear_cuenta.php" style="text-decoration: none; color: white;">Crea tu cuenta</a></button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Obtener los valores enviados por el formulario
      $email = $_POST["username"];
      $password = $_POST["password"];

      // Establecer la conexión a la base de datos
      $servername = "nombre_del_servidor";
      $username = "nombre_de_usuario";
      $password_db = "contraseña_de_usuario";
      $database = "nombre_de_la_base_de_datos";

      $conn = new mysqli($servername, $username, $password_db, $database);
      if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
      }

      // Preparar la consulta para verificar las credenciales
      $query = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
      $result = $conn->query($query);

      if ($result->num_rows == 1) {
        // Las credenciales son válidas, puedes realizar alguna acción, como redireccionar a una página de inicio
        echo "Inicio de sesión exitoso. Redireccionando...";
        // Aquí puedes agregar la lógica para redireccionar a la página de inicio
      } else {
        // Las credenciales son inválidas, muestra un mensaje de alerta
        echo '<p class="error-message">Correo electrónico o contraseña incorrectos.</p>';
      }

      // Cerrar la conexión a la base de datos
      $conn->close();
    }
    ?>
  </div>
  <br><br><br><br>
  <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <figure>
          <a href="#">
            <img src="img/logo.jpeg" alt="Logo de SLee Dw">
          </a>
        </figure>
      </div>
      <div class="box">
        <h2>SOBRE NOSOTROS</h2>
        <p>¡ Recetarium la mejor Manera de Cocinar !</p>
        <p>cubrimos la necesida y te damos ayuda a la hora de cocinar brindandote nuevas alternativas y experiencias a la hora de crear tu comida preferida o cuando aun no sabes que comer</p>
      </div>
      <div class="box">
        <h2>Siguenos en redes</h2>
        <div class="red-social">
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-youtube"></a>
        </div>
      </div>
    </div>
    <div class="grupo-2">
      <small>&copy; 2023 <b>Recetarium.com</b> - Todos los Derechos Reservados.</small>
    </div>
  </footer>
</body>
</html>
