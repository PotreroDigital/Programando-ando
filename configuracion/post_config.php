<?php
session_start();

if ($q = mysqli_connect("127.0.0.1", "root", "")) {
  $titulo = $_POST["titulo"];
  $lenguaje = $_POST["lenguaje"];
  $contenido = $_POST["contenido"];
  $user = $_SESSION["user"];


  mysqli_select_db($q, "prueba");
  $datos = "INSERT INTO post2(id, titulo, lenguaje, contenido, user_name) VALUES ('', '$titulo', '$lenguaje', '$contenido', '$user')";
  if (empty($titulo)) {
    echo "te falto poner el titulo capo";
    exit();
  } elseif (empty($contenido)) {
    echo "te falto poner el contenido";
    exit();
  }

  if(mysqli_query($q, $datos)) {
    header("location: ../public_post.php");
  } else {
    echo "error al almacenar";
  }


} else {
  echo "error al conectar a base de datos";
}





 ?>
