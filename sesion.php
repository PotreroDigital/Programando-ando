<?php
if ($conexion = mysqli_connect("127.0.0.1", "root", "")) {

  $usuario = $_POST["user"];
  $contraseña = $_POST["pass"];

  mysqli_select_db($conexion, "prueba");
  $consulta = "SELECT*FROM usuarios";
  $dato = mysqli_query($conexion, $consulta);

  while ($datos = mysqli_fetch_array($dato)) {
    if ($datos["usuario"] == $usuario and $datos["contraseña"] == $contraseña) {
      echo "sesion iniciada";
    } else {
      echo "error al iniciar sesion";
    }
  } 




} else {
  echo "error al conectar a la base de datos";
}






 ?>
