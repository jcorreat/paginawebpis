<?php 

 include 'conexion.php';

$correo = $_POST['usuario'];
//$correo = "josecarrasco1998@outlook.com";

$result = array();
$result['usuario'] = array();

$select = 'SELECT usu.id_usuario, usu.cedula, CONCAT(usu.nombre, " ", usu.apellido) nombres, usu.nombre_usuario, usu         .fecha_nacimiento, usu.sexo, usu.correo, usu.fecha_inicioSesion, rl.nombre_roles, usu.validarInicio FROM `usuarios` usu
            INNER JOIN roles rl
            ON usu.rol_id = rl.id_roles WHERE usu.correo="'.$correo.'" ';
$mostrar = mysqli_query($conexion,$select);

while($row = mysqli_fetch_array($mostrar)){
    $index['id_usuario'] = $row['0'];
    $index['cedula'] = $row['1'];
    $index['nombres'] = $row['2'];
    $index['nombre_usuario'] = $row['3'];
    $index['fecha_nacimiento'] = $row['4'];
    $index['sexo'] = $row['5'];
    $index['correo'] = $row['6'];
    $index['fecha_inicioSesion'] = $row['7'];
    $index['nombre_roles'] = $row['8'];
    $index['validarInicio'] = $row['9'];
    array_push($result['usuario'],$index);
}

$result["succes"]="1";
echo json_encode($result);
mysqli_close($conexion);

?>
