<?php 

 include 'conexion.php';

//$correo = $_POST['usuario'];
 $id = $_POST['usuario'];

$result = array();
$result['usuario'] = array();

$select = 'SELECT usu.id_usuario, usu.cedula, usu.nombre, usu.apellido, usu.nombre_usuario, usu.fecha_nacimiento, usu.sexo, usu.correo, usu.fecha_inicioSesion, rl.nombre_roles, usu.rol_id FROM `usuarios` usu
            INNER JOIN roles rl
            ON usu.rol_id = rl.id_roles WHERE usu.id_usuario="'.$id.'"';
$mostrar = mysqli_query($conexion,$select);

while($row = mysqli_fetch_array($mostrar)){
    $index['id_usuario'] = $row['0'];
    $index['cedula'] = $row['1'];
    $index['nombre'] = $row['2'];
    $index['apellido'] = $row['3'];
    $index['nombre_usuario'] = $row['4'];
    $index['fecha_nacimiento'] = $row['5'];
    $index['sexo'] = $row['6'];
    $index['correo'] = $row['7'];
    $index['fecha_inicioSesion'] = $row['8'];
    $index['nombre_roles'] = $row['9'];
    $index['rol_id'] = $row['10'];
    array_push($result['usuario'],$index);
}

$result["succes"]="1";
echo json_encode($result);
mysqli_close($conexion);

?>
