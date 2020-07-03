<?php
session_start();
$user_name = $_SESSION["user"];
if ($q= mysqli_connect("127.0.0.1", "root", "")) {
    $id =  $_GET["id"];
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
    <link rel="stylesheet" type="text/css" href="css/post3.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/8708a92b7e.js" crossorigin="anonymous"></script>
    <title>Post</title>
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-item grid-header">
        <ul class="grid-header__ul">
          <li class="grid-header__li"><a href="home.php">Inicio</a></li>
          <li class="grid-header__li"><a href="temas.php">Temas</a></li>
          <li class="grid-header__li"><a href="perfil.php"><?php echo $_SESSION["user"]; ?></a></li>
          <li class="grid-header__li"><a href="configuracion/deslogueo.php">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="grid-item grid-main">
        <div class="main-content">
          <?php
          $consulta = "SELECT * FROM post2 WHERE id=$id";
              if ($reg = mysqli_query($q, $consulta)) {
                $datos = mysqli_fetch_array($reg);
                $post_id = $datos["id"];
                $id_number = $id;


              } else {
                echo "error al enviar consulta";
              }
          echo'
        <div class="main-content__caja1">
          <h2 class="main-content__caja1-h2"> '.$datos["titulo"].'</h2>
          <br>
          <h3 class="main-content__caja1-h2"> Post by '.$datos["user_name"].'</h3>
          <br>
          <p class="main-content__caja1-p"> '.$datos["contenido"].'</p>
        </div>';

        ?>


        <div class="main-content__caja1">
          <form class="main-content__caja1-form" action="configuracion/config_comment.php " method="post">
            <h3>comentar</h3>
            <input type="hidden" name="id_number" value="<?php echo $id_number; ?>">
            <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
            <input type="hidden" name="name_user" value="<?php echo $user_name; ?>">
            <textarea name="contenido" rows="8" cols="180"></textarea>

            <input type="submit" name="" value="post">

          </form>

        </div>
        <?php
        $consulta = "SELECT * FROM comentarios WHERE post_id = '$id' ORDER BY id DESC";
            if ($reg = mysqli_query($q, $consulta)) {

              while ($datos = mysqli_fetch_array($reg)) {
                  echo'
                  <div class="main-content__caja1">
                  <h3 class="main-content__caja1-h2"> Comment by '.$datos["nombre_user"].'</h3>
                  <br>
                  <p class="main-content__caja1-p"> '.$datos["comentario"].'</p>
                  </div>';

              };

            } else {
              echo "error al enviar consulta";
            };


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
