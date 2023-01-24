<?php
include 'conexion.php';
$dcb = $_GET['dcb'];
date_default_timezone_set('America/Lima');    
$fecha = date('Y-m-d H:i:s', time());  
//$fecha = $_POST['fecha'];

$dcb = floatval($dcb);
$consulta= "INSERT INTO `lectura`(`id_lectura`, `data_decibel`, `fecha_creacion`, `dispositivo_id`) VALUES (NULL,'$dcb','$fecha','1')";
//echo $consulta;
mysqli_query($conexion,$consulta) or die (mysqli_error());


$select = "SELECT MAX(id_lectura) as id FROM `lectura`";
$mostrar = mysqli_query($conexion,$select);
while($row = mysqli_fetch_array($mostrar)){
    $id = $row['id'];
}

if($dcb > 50){
    $quer = "INSERT INTO `alerta` (`id_alerta`, `descripcion`, `fecha_creacion`, `data_id`) VALUES (NULL, 'El ruido está muy alto', '$fecha', '$id');"; 
    $result = mysqli_query($conexion, $quer);
}

mysqli_close($conexion);
?>