<?php
session_start();
$id = $_POST["post_id"];
$user_name = $_POST["name_user"];
$contenido = $_POST["contenido"];

if ($conexion = mysqli_connect("127.0.0.1", "root", "")) {
  mysqli_select_db($conexion, "prueba");
  $reg = "INSERT INTO comentarios(id, nombre_user, comentario, post_id) VALUES ('', '$user_name', '$contenido', '$id')";
  if (mysqli_query($conexion, $reg)) {

  } else {
      echo "error al almacenar usuario";
      exit();
  }
}


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../css/public_comment.css">
     <link rel="stylesheet" type="text/css" href="../css/normalize.css">
     <script src="https://kit.fontawesome.com/8708a92b7e.js" crossorigin="anonymous"></script>
     <title>inicio</title>
   </head>
   <body>
     <div class="grid-container">
       <div class="grid-item grid-header">
         <ul class="grid-header__ul">
           <li class="grid-header__li"><a href="#">Inicio</a></li>
           <li class="grid-header__li"><a href="temas.php">Temas</a></li>
           <li class="grid-header__li"><a href="perfil.php"><?php echo $_SESSION["user"]; ?></a></li>
           <li class="grid-header__li"><a href="configuracion/deslogueo.php">Cerrar Sesion</a></li>
         </ul>
       </div>
       <div class="grid-item grid-main">

         <div class="main-content">


           <div class="main-content__caja1">
                  <form class="main-content__caja1-form" action="../post.php" method="get">
                      <h2>Comentario Publicado</h2>
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <input type="submit" name="" value="volver">
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
