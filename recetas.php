<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/recetas.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

</head>
<body>
<header>
        <div class="header-content">
        <a href="Index.php"><img src="img/Logo.jpeg" alt="" style="border-radius: 10px; width: 70px; height: 70px; z-index: 1;"></a>
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
        <div class="form">
            <h1>Registro de recetas</h1>
            <form method="post" action="recetas.php">
                <p>Imagen<br>
                <input type="file" name="imagen"></p>
                
                <p>Nombre<br>
                <input type="text" name="nombre_receta" placeholder="Nombre de la receta" class="field"></p>

                <p>Descripción<br>
                <input type="text" name="descripcion" placeholder="Descripción" class="field"></p>

                <p>Ingredientes<br>
                <input type="text" name="ingredientes" placeholder="Ingredientes" class="field"></p>

                <p>Elementos específicos<br>
                <input type="text" name="elementos" placeholder="Elementos específicos" class="field"></p>

                <p>Tiempo de receta<br>
                <select name="tiempo" class="field">
                    <option value="5-10">5-10 minutos</option>
                    <option value="10-15">10-15 minutos</option>
                    <!-- Resto de opciones omitidas para mayor claridad -->
                </select></p>

                <p>Tipo de plato<br>
                <select name="tipo" class="field">
                    <option value="tipico">Plato típico</option>
                    <option value="nativo">Plato nativo</option>
                    <!-- Resto de opciones omitidas para mayor claridad -->
                </select></p>

                <p>Dificultad<br>
                <select name="dificultad" class="field">
                    <option value="facil">Fácil</option>
                    <option value="intermedio">Intermedio</option>
                    <!-- Resto de opciones omitidas para mayor claridad -->
                </select></p>
                <br>
                <input type="submit" value="Registrar" class="btn-green">
            </form>
        </div>
    </div>
    <br><br><br>
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
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include("con_db.php"); // Asegúrate de tener este archivo y que se establezca la conexión correctamente.

        $imagen = $_POST['imagen'];
        $nombre = $_POST['nombre_receta'];
        $descripcion = $_POST['descripcion'];
        $ingredientes = $_POST['ingredientes'];
        $elementos_especificos = $_POST['elementos'];
        $tiempo = $_POST['tiempo'];
        $tipo = $_POST['tipo'];
        $dificultad = $_POST['dificultad'];

        $consulta = "INSERT INTO recetas (imagen, nombre, descripcion, ingredientes) VALUES ('$imagen', '$nombre', '$descripcion', '$ingredientes')";

        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo "<script> alert('Los datos se insertaron correctamente');
                window.location.href='administrador.php';
                </script>";
        } else {
            echo "<script> alert('Los datos no se insertaron correctamente');
                window.location.href='enfermedades.php';
                </script>";
        }
    }
    ?>
</body>
</html>
