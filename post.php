<?php
if ($q= mysqli_connect("127.0.0.1", "root", "")) {
    $id = (int) $_GET["id"];
    mysqli_select_db($q, "prueba");





} else {
  echo "error al conectar a base de datos";
}





 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/post.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/8708a92b7e.js" crossorigin="anonymous"></script>
    <title>Post</title>
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-item grid-header">
        <ul class="grid-header__ul">
          <li class="grid-header__li"><a href="#">Inicio</a></li>
          <li class="grid-header__li"><a href="#">Temas</a></li>
          <li class="grid-header__li"><a href="#">Mi Perfil</a></li>
          <li class="grid-header__li"><a href="#">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="grid-item grid-main">
        <div class="main-content">
          <?php
          $consulta = "SELECT * FROM post2 WHERE id=$id";
              if ($reg = mysqli_query($q, $consulta)) {
                $datos = mysqli_fetch_array($reg);


              } else {
                echo "error al enviar consulta";
              }
          echo'
        <div class="main-content__caja1">
          <h2 class="main-content__caja1-h2"> '.$datos["titulo"].'</h2>
          <p class="main-content__caja1-p"> '.$datos["contenido"].'</p>
        </div>';

        ?>
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
