<?php
include 'conexion.php';
$email=$_REQUEST["correo"];
$password=$_REQUEST["password"];

$email = str_replace("%20", " ", $email);
$password = str_replace("%20", " ", $password);

$logear = "select * from usuarios where correo='$email' and contrasena=SHA1('$password')"; 

$result = mysqli_query($conexion, $logear);
$val = mysqli_fetch_assoc($result);
echo json_encode($val);
mysqli_close($conexion);


?>