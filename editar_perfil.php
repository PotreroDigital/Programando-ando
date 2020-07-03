<?php
  session_start();
  $usuario = $_SESSION["user"];
  if (empty($_SESSION["pass"])) {
      echo "sesion no iciada";
      exit();
  }
  if ($conexion = mysqli_connect("127.0.0.1", "root", "")) {
    mysqli_select_db($conexion, "prueba");
    $q = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $reg = mysqli_query($conexion, $q);
    $datos = mysqli_fetch_array($reg);
    $user_mail = $datos["correo"];
  }


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/editar_perfil.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/8708a92b7e.js" crossorigin="anonymous"></script>
    <title>Editar</title>
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
             <form class="main-content__caja1-form" action="configuracion/edit.php " method="post">
               <input type="text" name="usuario" value="<?php echo $usuario;?>" placeholder="usuario" min="6" required>
               <input type="text" name="correo" value="<?php echo $user_mail;?>" placeholder="correo" required>
               <input type="password" name="new_password" placeholder="contraseña nueva" required>
               <input type="password" name="password1" placeholder="contraseña actual" required>
               <input type="password" name="password2" placeholder="repetir contraseña" required>
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
