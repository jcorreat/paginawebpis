<?php 

 include 'conexion.php';

$result = array();
$result['alerta'] = array();
$select = 'SELECT al.id_alerta, al.descripcion, al.fecha_creacion, lt.data_decibel FROM `alerta` al
INNER JOIN lectura lt
ON al.data_id= lt.id_lectura';
$mostrar = mysqli_query($conexion,$select);

while($row = mysqli_fetch_array($mostrar)){
    $index['id_alerta'] = $row['0'];
    $index['descripcion'] = $row['1'];
    $index['fecha'] = $row['2'];
    $index['lectura'] = $row['3'];
       array_push($result['alerta'],$index);
}

$result["succes"]="1";
echo json_encode($result);
mysqli_close($conexion);

?>
