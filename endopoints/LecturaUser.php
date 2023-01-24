<?php 

 include 'conexion.php';

$result = array();
$result['lectura'] = array();
$select = 'SELECT lect.data_decibel, alt.fecha_creacion, alt.descripcion FROM `alerta` alt
            INNER JOIN lectura lect
            ON alt.data_id = lect.id_lectura ORDER BY id_lectura DESC LIMIT 1';
$mostrar = mysqli_query($conexion,$select);

while($row = mysqli_fetch_array($mostrar)){
    $index['data'] = $row['0'];
    $index['fecha'] = $row['1'];
    $index['descripcion'] = $row['2'];
       array_push($result['lectura'],$index);
}

$result["succes"]="1";
echo json_encode($result);
mysqli_close($conexion);

?>
