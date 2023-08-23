<!DOCTYPE html>
<html>
<head>
  <title>Mi página HTML</title>
  <link rel="stylesheet" href="estilos/apartado_usuario.css" type="text/css">
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

  <main>
    <div class="container">
    
    <section class="recuadro">
      <div class="recuadro-contenido">
        <img src="img/cook.jpg" alt="Imagen 1">
        <div class="texto"><a href="recetas.php">¡Crear una nueva Receta!</a></div>
      </div>
      <aside>
        <h3>¡Crea tus propias recetas!</h3>
        <p>puedes crear tus propias recetas y subirlas para tenerlas a la mano y tambien disponible par aque las demas recetad</p>
      </aside>
    </section>

    <section class="recuadro">
      <div class="recuadro-contenido">
        <img src="img/fondo3.jpg" alt="Imagen 2">
        <div class="texto"><a href="">Mis Recetas</a></div>
      </div>
      <aside>
        <h3>Ver Mis Recetas</h3>
        <p>Aca podras ver las recetas que creaste y si gustas puedes modificarla o agregarle algo que la pueda mejorar para que le encante a todos.</p>
      </aside>
    </section>
    </div>
  </main>

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
