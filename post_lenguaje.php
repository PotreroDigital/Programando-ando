<?php
  session_start();
  $lenguaje = $_GET["id"];
  if (empty($_SESSION["pass"])) {
      echo "sesion no iciada";
      exit();
  }

  if($q=mysqli_connect("127.0.0.1", "root", "")) {
      mysqli_select_db($q, "prueba");
      $consulta = "SELECT * FROM post2 WHERE lenguaje='$lenguaje' ORDER BY id DESC";
      $orden= mysqli_query($q, $consulta);
    };
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home9.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/8708a92b7e.js" crossorigin="anonymous"></script>
    <title>inicio</title>
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-item grid-header">
        <ul class="grid-header__ul">
          <li class="grid-header__li"><a href="home.php">Inicio</a></li>
          <li class="grid-header__li"><a href="lenguajes.php">Lenguajes</a></li>
          <li class="grid-header__li"><a href="perfil.php"><?php echo $_SESSION["user"]; ?></a></li>
          <li class="grid-header__li"><a href="configuracion/deslogueo.php">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="grid-item grid-main">

        <div class="main-content">
      <?php
      while ($datos = mysqli_fetch_array($orden)) {

        echo '<div class="main-content__caja1">
                  <h2 class="main-content__caja1-h2"><a  href="post.php?id='.$datos['id'].'">'.$datos['titulo'].'</a></h2>
              </div>';

      }
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
            <li class="derecha__caja-li"><a href="https://www.php.net">php.net</a></li>
            <li class="derecha__caja-li"><a href="https://www.python.org/doc/">Python</a></li>
            <li class="derecha__caja-li"><a href="https://developer.mozilla.org/es/">MDN web docs</a></li>
            <li class="derecha__caja-li"><a href="https://docs.oracle.com/en/java/">Java</a></li>
          </ul>
        </div>
      </div>
      <div class="grid-item grid-footer"></div>


    </div>
  </body>
</html>
