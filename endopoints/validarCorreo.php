<?php
include 'conexion.php';

$correop=$_POST['correo'];
//$correop="josecarrasco1998@outlook.com";
$select = "SELECT correo FROM `usuarios` WHERE correo='".$correop."'";
$mostrar = mysqli_query($conexion,$select);

$objeto['validar'] = array();
while($row = mysqli_fetch_array($mostrar)){
    $correo2['email'] = $row['0'];
        array_push($objeto['validar'],$correo2);
}

echo json_encode($objeto);
mysqli_close($conexion);

?>