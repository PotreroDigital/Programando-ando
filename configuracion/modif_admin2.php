<?php
$user_name = $_POST["usuario"];
$user_pass = $_POST["new_password"];
$user_mail = $_POST["correo"];
$correo = $_POST["correo_actual"];

if ($conexion = mysqli_connect("127.0.0.1", "root", "")) {
  mysqli_select_db($conexion, "prueba");
  $q = "SELECT * FROM usuarios";
  $new_q = "UPDATE usuarios SET usuario='$user_name', correo='$user_mail', contraseña='$user_pass' WHERE correo='$correo'";
  $reg = mysqli_query($conexion, $q);
  while ($datos = mysqli_fetch_array($reg)) {
    if ($datos["usuario"] == $user_name) {
      echo "ese usuario ya esta en la base de datos";
      exit();
    } elseif ($datos["correo"] == $user_mail) {
      echo "ese correo ya esta en la base de datos";
    }
  }

  if (mysqli_query($conexion, $new_q)) {
    echo "cambios realizados";
  } else {
    echo "error al realizar cambios";
  }

} else {
  echo "error al conectar a base de datos";
}




 ?>
