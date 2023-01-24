<?php 

 include 'conexion.php';

$result = array();
$result['lectura'] = array();
$select = 'SELECT `id_lectura`,`data_decibel`, `fecha_creacion` FROM `lectura` ORDER BY id_lectura DESC';
$mostrar = mysqli_query($conexion,$select);

while($row = mysqli_fetch_array($mostrar)){
    $index['id_lectura'] = $row['0'];
    $index['data_decibel'] = $row['1'];
    $index['fecha'] = $row['2'];
       array_push($result['lectura'],$index);
}

$result["succes"]="1";
echo json_encode($result);
mysqli_close($conexion);

?>
