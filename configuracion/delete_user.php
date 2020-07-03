<?php
$dato=$_POST['id'];
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "prueba");

$q = "DELETE FROM usuarios WHERE id='$dato'";

if (mysqli_query($conexion, $q)) {
    echo "usuario eliminado";
} else {
    echo "error al eliminar usuario";

}








 ?>
