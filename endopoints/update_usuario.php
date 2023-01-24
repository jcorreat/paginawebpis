<?php
include 'conexion.php';

$nombres = $_POST['nombre'];
$apellidos = $_POST['apellido'];
//$sexo = $_POST['sexo'];
$sexo = "Femenino";
$correo = $_POST['correo'];
$cedula = $_POST['cedula'];
$fecha = $_POST['fecha'];
//$id = $_POST['id_usuario'];
$id = $_POST['usuario'];


$consulta= "UPDATE `usuarios` SET `cedula`='".$cedula."', `nombre`='".$nombres."', `apellido`='".$apellidos."',  `fecha_nacimiento`='".$fecha."',`sexo`='".$sexo."',`correo`='".$correo."' WHERE id_usuario='$id'";


mysqli_query($conexion,$consulta) or die (mysqli_error());

mysqli_close($conexion);

?>