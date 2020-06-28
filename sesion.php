<?php

$usuario = $_POST["user"];
$contraseña = $_POST["pass"];

if($conexion = mysqli_connect("127.0.0.1", "root", "")) {

  mysqli_select_db($conexion, "prueba");
  if ($q= "SELECT*FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'") {
    $reg= mysqli_query($conexion, $q);
    $datos= mysqli_fetch_array($reg);

    if  ($datos["usuario"] != $usuario or $datos["contraseña"] != $contraseña ){
      echo "Usuario o Contraseña incorrecta";
    } elseif ($datos["usuario"] == $usuario && $datos["contraseña"] == $contraseña ) {

          echo "hola ;)";

    } else {
      echo "contraseña incorrecta";
    }

  } else {
    echo "error al enviar consulta";
  };


} else {
  echo "error al conectar a la base de datos";
}






 ?>
