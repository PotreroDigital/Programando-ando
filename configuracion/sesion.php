<?php

$usuario = $_POST["user"];
$contraseña = $_POST["pass"];

if($conexion = mysqli_connect("127.0.0.1", "root", "")) {

  mysqli_select_db($conexion, "prueba");
  if ($q= "SELECT*FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'") {
    $reg= mysqli_query($conexion, $q);
    $datos= mysqli_fetch_array($reg);
    $datos["correo"] = $mail;

    if  ($datos["usuario"] != $usuario or $datos["contraseña"] != $contraseña ){
      echo "Usuario o Contraseña incorrecta";
    } elseif ($datos["usuario"] == $usuario && $datos["contraseña"] == $contraseña ) {
      session_start();
      $_SESSION["user"] = $usuario;
      $_SESSION["pass"] = $contraseña;
      $_SESSION["mail"] = $mail;

      header("Location: ../home.php");

    } else {
      echo "datos no registrados";
    }

  } else {
    echo "error al enviar consulta";
  };


} else {
  echo "error al conectar a la base de datos";
}






 ?>
