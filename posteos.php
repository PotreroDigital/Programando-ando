<?php
session_start();

if (empty($_SESSION["pass"])) {
  header("location: inicio.html");
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/posteos1.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/8708a92b7e.js" crossorigin="anonymous"></script>
    <title>Posteos</title>
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-item grid-header">
        <ul class="grid-header__ul">
          <li class="grid-header__li"><a href="home.php">Inicio</a></li>
          <li class="grid-header__li"><a href="lenguaje.php">Lenguajes</a></li>
          <li class="grid-header__li"><a href="perfil.php"><?php echo $_SESSION["user"]; ?></a></li>
          <li class="grid-header__li"><a href="configuracion/deslogueo.php">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="grid-item grid-main">
        <div class="main-content">
           <div class="main-content__caja1">
             <form class="main-content__caja1-form" action="configuracion/post_config.php " method="post">
               <input type="text" name="titulo" value="" placeholder="titulo" required>
               <textarea name="contenido" rows="8" cols="180" required></textarea>
               <select class="main-content__caja1-select" name="lenguaje">
                 <option value="Javascript">Javascript</option>
                 <option value="PHP">PHP</option>
                 <option value="Python">Python</option>
                 <option value="C">C</option>
                 <option value="C++">C++</option>

               </select>
               <input type="submit" name="" value="post">

             </form>

           </div>

          <div class="space-box"></div>

        </div>
      </div>
      <div class="grid-item grid-aside">
        <div class="aside__caja">


        </div>
      </div>

      <div class="grid-item grid-derecha">
        <div class="derecha__caja">
          <ul>

            <li><h3>Links relacionados</h3></li>
            <li class="derecha__caja-li"><a href="#">php.net</a></li>
            <li class="derecha__caja-li"><a href="#">xataka.com</a></li>
            <li class="derecha__caja-li"><a href="#">MDN web docs</a></li>
            <li class="derecha__caja-li"><a href="#">link 1</a></li>
            <li class="derecha__caja-li"><a href="#">link 1</a></li>
            <li class="derecha__caja-li"><a href="#">link 1</a></li>
          </ul>
        </div>
      </div>
      <div class="grid-item grid-footer"></div>


    </div>
  </body>
</html>
