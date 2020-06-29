<?php
  session_start();
  if (empty($_SESSION["pass"])) {
    echo "sesion no iciada";
    exit();
  };

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/8708a92b7e.js" crossorigin="anonymous"></script>
    <title>inicio</title>
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-item grid-header">
        <ul class="grid-header__ul">
          <li class="grid-header__li"><a href="#">Inicio</a></li>
          <li class="grid-header__li"><a href="#">Temas</a></li>
          <li class="grid-header__li"><a href="perfil.php">Mi Perfil</a></li>
          <li class="grid-header__li"><a href="configuracion/deslogueo.php">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="grid-item grid-main">
        <div class="main-content">
          <div class="main-content__caja1">
              <h2 class="main-content__caja1-h2"><a href="#">hola buenas les traigo tips que podran utilizar con css, espero que les guste</a></h3>
          </div>
          <div class="main-content__caja1">
              <h2 class="main-content__caja1-h2"><a href="#">hola buenas les traigo tips que podran utilizar con css, espero que les guste</a></h3>
          </div>
          <div class="main-content__caja1">
              <h2 class="main-content__caja1-h2"><a href="#">hola buenas les traigo tips que podran utilizar con css, espero que les guste</a></h3>
          </div>
          <div class="main-content__caja1">
              <h2 class="main-content__caja1-h2"><a href="#">hola buenas les traigo tips que podran utilizar con css, espero que les guste</a></h3>
          </div>
          <div class="main-content__caja1">
              <h2 class="main-content__caja1-h2"><a href="#">hola buenas les traigo tips que podran utilizar con css, espero que les guste</a></h3>
          </div>
          <div class="main-content__caja1">
              <h2 class="main-content__caja1-h2"><a href="#">hola buenas les traigo tips que podran utilizar con css, espero que les guste</a></h3>
          </div>
          <div class="main-content__caja1">
              <h2 class="main-content__caja1-h2"><a href="#">hola buenas les traigo tips que podran utilizar con css, espero que les guste</a></h3>
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