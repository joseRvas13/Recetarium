<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Recetas basadas en ingredientes</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos/busqueda.css">
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
        <h1>Busca recetas con los ingredientes que tengas</h1><br>
        <form id="ingredient-form" onsubmit="searchRecipes(event)">
            <label for="ingredients">Ingredientes:</label><br>
            <textarea id="ingredients" rows="4" placeholder="Ingrese los ingredientes separados por líneas" required></textarea>
            
            <label for="observations">¿Quieres ser más preciso en tu búsqueda?</label><br>
            <textarea id="observations" rows="4" placeholder="Ingrese detalladamente la receta que quieras buscar. (Este campo es opcional)"></textarea>

            <br><br><br>
            <input type="submit" value="Buscar recetas">
        </form>
        
        <div id="recipe-results"></div>
    </div>
    
    <script src="script.js"></script>
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
