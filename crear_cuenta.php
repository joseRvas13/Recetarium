<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Crea tu cuenta</title>
  <link rel="stylesheet" href="estilos/crear_cuentas1.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

  <style>
    .indicador {
      display: inline-block;
      width: 20px;
      height: 20px;
      line-height: 20px;
      text-align: center;
      margin-left: 10px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 50%;
    }

    .verde {
      color: green;
    }

    .rojo {
      color: red;
    }
  </style>
</head>
<body>
<header>
    <div class="header-content">
      <img src="img/Logo.jpeg" alt="" style="border-radius: 10px; width: 70px; height: 70px; z-index: 1;">
      <div class="logo">
        <h1> Recetarium<b>.com</b></h1>
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

  

  <div class="container">
    <h2>¡Crea tu nueva cuenta!</h2>
    <form action="" method="POST" onsubmit="return validarFormulario()">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required><br><br>

      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" required><br><br>

      <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
      <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

      <label for="genero">Género:</label>
      <select id="genero" name="genero" required>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        <option value="Otro">Otro</option>
      </select><br><br>

      <label for="telefono">Teléfono:</label>
      <input type="text" id="telefono" name="telefono" required><br><br>

      <label for="ciudad">Ciudad:</label>
      <input type="text" id="ciudad" name="ciudad" required><br><br>

      <label for="pais">País:</label>
      <input type="text" id="pais" name="pais" required><br><br>

      <label for="correo">Correo Electrónico:</label>
      <input type="email" id="correo" name="correo" required><br><br>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required><br><br>

      <input type="submit" value="Crear Cuenta">
    </form>
  </div>

  <script>
    function validarFormulario() {
      var nombreInput = document.getElementById('nombre');
      var apellidoInput = document.getElementById('apellido');
      var fechaNacimientoInput = document.getElementById('fecha_nacimiento');
      var generoInput = document.getElementById('genero');
      var telefonoInput = document.getElementById('telefono');
      var ciudadInput = document.getElementById('ciudad');
      var paisInput = document.getElementById('pais');
      var correoInput = document.getElementById('correo');
      var passwordInput = document.getElementById('password');

      var camposValidos = true;

      if (nombreInput.value === '') {
        mostrarIndicador(nombreInput, false);
        camposValidos = false;
      } else {
        mostrarIndicador(nombreInput, true);
      }

      if (apellidoInput.value === '') {
        mostrarIndicador(apellidoInput, false);
        camposValidos = false;
      } else {
        mostrarIndicador(apellidoInput, true);
      }

      if (fechaNacimientoInput.value === '') {
        mostrarIndicador(fechaNacimientoInput, false);
        camposValidos = false;
      } else {
        mostrarIndicador(fechaNacimientoInput, true);
      }

      if (generoInput.value === '') {
        mostrarIndicador(generoInput, false);
        camposValidos = false;
      } else {
        mostrarIndicador(generoInput, true);
      }

      if (telefonoInput.value === '') {
        mostrarIndicador(telefonoInput, false);
        camposValidos = false;
      } else {
        mostrarIndicador(telefonoInput, true);
      }

      if (ciudadInput.value === '') {
        mostrarIndicador(ciudadInput, false);
        camposValidos = false;
      } else {
        mostrarIndicador(ciudadInput, true);
      }

      if (paisInput.value === '') {
        mostrarIndicador(paisInput, false);
        camposValidos = false;
      } else {
        mostrarIndicador(paisInput, true);
      }

      if (correoInput.value === '') {
        mostrarIndicador(correoInput, false);
        camposValidos = false;
      } else {
        mostrarIndicador(correoInput, true);
      }

      if (passwordInput.value === '') {
        mostrarIndicador(passwordInput, false);
        camposValidos = false;
      } else {
        mostrarIndicador(passwordInput, true);
      }

      return camposValidos;
    }

    function mostrarIndicador(input, esValido) {
      var elementoPadre = input.parentElement;
      var indicador = document.createElement('span');
      indicador.className = 'indicador';

      if (esValido) {
        indicador.innerHTML = '&#10004;'; // Chulito verde
        indicador.classList.add('verde');
      } else {
        indicador.innerHTML = '&#10008;'; // X roja
        indicador.classList.add('rojo');
      }

      var indicadorAnterior = elementoPadre.querySelector('.indicador');
      if (indicadorAnterior) {
        elementoPadre.removeChild(indicadorAnterior);
      }

      elementoPadre.appendChild(indicador);
    }
  </script>

  <?php
    // Configuración de la conexión a la base de datos
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "recetarium"; 

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
      die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Obtener los datos del formulario
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $fechaNacimiento = $_POST["fecha_nacimiento"];
      $genero = $_POST["genero"];
      $telefono = $_POST["telefono"];
      $ciudad = $_POST["ciudad"];
      $pais = $_POST["pais"];
      $correo = $_POST["correo"];
      $password = $_POST["password"];

      // Insertar los datos en la base de datos
      $sql = "INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, genero, telefono, ciudad, pais, correo, password)
              VALUES ('$nombre', '$apellido', '$fechaNacimiento', '$genero', '$telefono', '$ciudad', '$pais', '$correo', '$password')";

      if ($conn->query($sql) === TRUE) {
        echo "Cuenta creada exitosamente";
      } else {
        echo "Error al crear la cuenta: " . $conn->error;
      }
    }

    // Cerrar la conexión
    $conn->close();
  ?>
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


</body>
</html>
