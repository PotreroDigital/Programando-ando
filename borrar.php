<?php
  session_start();
  if (empty($_SESSION["pass"])) {
      echo "sesion no iciada";
      exit();
  }


  if($q=mysqli_connect("127.0.0.1", "root", "")) {
      mysqli_select_db($q, "prueba");
      $consulta = "SELECT * FROM usuarios";
      $orden= mysqli_query($q, $consulta);
    };

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/borrar.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/8708a92b7e.js" crossorigin="anonymous"></script>
    <title>inicio</title>
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-item grid-header">
        <ul class="grid-header__ul">
          <li class="grid-header__li"><a href="home.php">Inicio</a></li>
          <li class="grid-header__li"><a href="lenguajes.php">Lenguaje</a></li>
          <li class="grid-header__li"><a href="perfil.php"><?php echo $_SESSION["user"]; ?></a></li>
          <li class="grid-header__li"><a href="configuracion/deslogueo.php">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="grid-item grid-main">

        <div class="main-content">


        <div class="main-content__caja1">
                  <h2 class="main-content__caja1-h2">Che estas seguro de eliminar tu cuenta?</h2>
                  <form class="main-content__form" action="configuracion/borrar_user.php" method="post">
                    <input type="hidden" name="id_user" value="<?php echo $user; ?>">
                    <a href="perfil.php" class="main-content__form-a">Cancelar</a>
                    <input type="submit" class="main-content__form-sub"name="" value="Aceptar">
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

      </div>
      <div class="grid-item grid-footer"></div>


    </div>
  </body>
</html>
