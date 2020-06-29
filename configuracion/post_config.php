<?php
session_start();

if ($q = mysqli_connect("127.0.0.1", "root", "")) {
  $titulo = $_POST["titulo"];
  $lenguaje = $_POST["lenguaje"];
  $contenido = $_POST["contenido"];
  $user = $_SESSION["user"];


  mysqli_select_db($q, "prueba");
  $datos = "INSERT INTO post2(id, titulo, lenguaje, contenido, user_name) VALUES ('', '$titulo', '$lenguaje', '$contenido', '$user')";
  if(mysqli_query($q, $datos)) {
    echo "post almacenado en base de datos";
  } else {
    echo "error al almacenar";
  }


} else {
  echo "error al conectar a base de datos";
}





 ?>
