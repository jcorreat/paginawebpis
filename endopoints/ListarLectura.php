<?php 

 include 'conexion.php';

$result = array();
$result['lectura'] = array();
$select = 'SELECT `id_lectura`, `data_decibel`, `fecha_creacion`, `dispositivo_id` FROM `lectura`';
$mostrar = mysqli_query($conexion,$select);

while($row = mysqli_fetch_array($mostrar)){
    $index['id_lectura'] = $row['0'];
    $index['descripcion'] = $row['1'];
    $index['fecha'] = $row['2'];
    $index['dispotivo_id'] = $row['3'];
       array_push($result['lectura'],$index);
}

$result["succes"]="1";
echo json_encode($result);
mysqli_close($conexion);

?>
