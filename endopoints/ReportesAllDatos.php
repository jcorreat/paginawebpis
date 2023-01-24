<?php
include('conexion.php');
$result = array();
$result['lectura'] = array();
$select = 'SELECT `l.id_lectura`, `l.data_decibel`, `l.fecha_creacion`, `a.descripcion` FROM `lectura` l, `alerta` a WHERE `l.id_lectura` = `a.data_id`';
$mostrar = mysqli_query($conexion, $select);

while ($row = mysqli_fetch_array($mostrar)) {
    $index['id_lectura'] = $row['0'];
    $index['descripcion'] = $row['1'];
    $index['fecha'] = $row['2'];
    $index['dispotivo_id'] = $row['3'];
    array_push($result['lectura'], $index);
}

$result["succes"] = "1";
echo json_encode($result);
mysqli_close($conexion);

?>