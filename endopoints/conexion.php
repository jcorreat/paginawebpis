<?php
$hostname='localhost';
$database='proyecto_ultrasonido';
$username='proyecto_julissa';
$password='Decibelimetro2022*';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "problemas al iniciar conexion";
}
?>