<?php
include 'conexion.php';

$password = $_POST['password'];
$correo = $_POST['usuario'];

$consulta= "UPDATE `usuarios` SET `contrasena`= SHA1('".$password."') WHERE correo='$correo'";


mysqli_query($conexion,$consulta) or die (mysqli_error());

mysqli_close($conexion);

?>