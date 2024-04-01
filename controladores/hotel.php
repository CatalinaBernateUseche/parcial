<?php
require "../config/conexion.php"; 

$nombre1 = $_POST["nombre1"];
$documento1 = $_POST["documento1"];
$edad1 = $_POST["edad1"];
$habitacion = $_POST["habitacion"];
$nombre_pareja = $_POST["nombre_pareja"];
$documento_pareja = $_POST["documento_pareja"];
$edad_pareja = $_POST["edad_pareja"];

if ($edad1>=18 && $edad_pareja>=18){
$sql = "INSERT INTO hotel(nombre1, documento1, edad1, habitacion, nombre_pareja, documento_pareja, edad_pareja, fecha_sys) VALUES ('".$nombre1."', '".$documento1."', '".$edad1."', '".$habitacion."', '".$nombre_pareja."', '".$documento_pareja."', '".$edad_pareja."', now())";
if ($conexion->query($sql))
echo "puedes entrar a la habitacion";
}else{
    echo "no puedes entrar a la habitacion";
}
?>