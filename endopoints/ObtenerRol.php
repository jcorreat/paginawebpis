<?php
include 'conexion.php';

$correop=$_POST['usuario'];
//$correop="josecarrasco1998@outlook.com";
$result = array();
$result['validar'] = array();
$select = "SELECT rol_id FROM `usuarios` WHERE correo='".$correop."'";
$mostrar = mysqli_query($conexion,$select);

while($row = mysqli_fetch_array($mostrar)){
    $correo2['rol'] = $row['0'];
    array_push($result['validar'],$correo2);
}

echo json_encode($result);
mysqli_close($conexion);

?>