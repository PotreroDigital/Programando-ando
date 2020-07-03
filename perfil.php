<?php
  session_start();
  if (empty($_SESSION["pass"])) {
    echo "sesion no iciada";
    exit();
  };
  $user = $_SESSION["user"];
  if ($conexion = mysqli_connect("127.0.0.1", "root", "")) {
    mysqli_select_db($conexion, "prueba");
    $consulta = "SELECT * FROM post2 WHERE user_name='$user' ORDER BY id DESC";
    $reg = mysqli_query($conexion, $consulta);

  } else {
    echo "error al conectar a base de datos";
  }

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/perfil.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/8708a92b7e.js" crossorigin="anonymous"></script>
    <title>Perfil</title>
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-item grid-header">
        <ul class="grid-header__ul">
          <li class="grid-header__li"><a href="home.php">Inicio</a></li>
          <li class="grid-header__li"><a href="#">Temas</a></li>
          <li class="grid-header__li"><a href="#"><?php echo $_SESSION["user"]; ?></a></li>
          <li class="grid-header__li"><a href="configuracion/deslogueo.php">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="grid-item grid-main">
        <div class="main-content">
          <div class="main-content__caja0">
            <h1>Mis Post</h1>

          </div>
          <?php
            while ($datos = mysqli_fetch_array($reg)) {

              echo '<div class="main-content__caja1">
                <h2 class="main-content__caja1-h2"><a href="post.php?id='.$datos['id'].'">'.$datos["titulo"].'</a></h3>
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
        <div class="derecha__perfil-name">
          <h3>Nombre Usuario</h3>
        </div>
        <div class="derecha__perfil-post">
          <a href="posteos.php">New Post</a>
        </div>

        <div class="derecha__caja">
          <ul>
            <?php
            if ($_SESSION["level"] == 1) {
              echo '
                <li class="derecha__caja-li"><a href="editar_perfil.php">Editar Perfil</a></li>
                <li class="derecha__caja-li"><a href="borrar_user.php">Borrar usuarios</a></li>
                <li class="derecha__caja-li"><a href="borrar.php">eliminar cuenta</a></li>
                <li class="derecha__caja-li"><a href="configuracion/deslogueo.php">Cerrar Sesion</a></li>';

            } else {
              echo '<li class="derecha__caja-li"><a href="editar_perfil.php">Editar Perfil</a></li>
                    <li class="derecha__caja-li"><a href="borrar.php">eliminar cuenta</a></li>
                    <li class="derecha__caja-li"><a href="configuracion/deslogueo.php">Cerrar Sesion</a></li>';
            };


            ?>

          </ul>
        </div>
        <div class="derecha__perfil-box">

        </div>

      </div>
      <div class="grid-item grid-footer"></div>


    </div>
  </body>
</html>
