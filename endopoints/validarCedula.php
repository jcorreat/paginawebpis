<?php
include 'conexion.php';

$cedula=$_GET['cedula'];
//$cedula = "1207098169";
$select = "SELECT cedula FROM `usuarios` WHERE cedula='".$cedula."'";
$mostrar = mysqli_query($conexion,$select);

$objeto['cedula'] = array();
while($row = mysqli_fetch_array($mostrar)){
    $correo2['cedula'] = $row['0'];
        array_push($objeto['cedula'],$correo2);
}

echo json_encode($objeto);
mysqli_close($conexion);

?>