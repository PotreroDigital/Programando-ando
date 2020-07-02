<?php
$id = $_POST["post_id"];
$user_name = $_POST["name_user"];
$contenido = $_POST["contenido"];

if ($conexion = mysqli_connect("127.0.0.1", "root", "")) {
  mysqli_select_db($conexion, "prueba");
  $reg = "INSERT INTO comentarios(id, nombre_user, comentario, post_id) VALUES ('', '$user_name', '$contenido', '$id')";
  if (mysqli_query($conexion, $reg)) {
    header("location: ../post.php");
  } else {
      echo "error al almacenar usuario";
  }
}








 ?>
