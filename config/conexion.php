<?php

$dataBase = "mysql:dbname=parcial;host=127.0.0.1";
$user = "root";
$pass = "";

try {

    $conexion = new PDO($dataBase, $user, $pass);

}

catch (Exception $e) {

    die("Error Al Conectar Con La Base De Datos");

}



?>