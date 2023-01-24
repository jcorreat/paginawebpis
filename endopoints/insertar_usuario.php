<?php
include 'conexion.php';

$nombres = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$nombre_usuario = $_POST['nombre_usuario'];
$sexo = $_POST['sexo'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$cedula = $_POST['cedula'];
$fecha = $_POST['fecha'];


date_default_timezone_set('America/Lima');    
$fechaSesion = date('Y-m-d h:i:s', time()); 



$consulta= "INSERT INTO `usuarios`(`id_usuario`, `cedula`, `nombre`, `apellido`, `nombre_usuario`, `fecha_nacimiento`, `sexo`, `correo`, `contrasena`, `estado_id`, `validarInicio`, `fecha_InicioSesion`, `rol_id`) VALUES (NULL,'".$cedula."','".$nombres."','".$apellidos."','".$nombre_usuario."','".$fecha."','".$sexo."','".$correo."', SHA1('".$cedula."'),'1','0', '$fechaSesion','2')";

echo $consulta;

mysqli_query($conexion,$consulta) or die (mysqli_error());

mysqli_close($conexion);

?>