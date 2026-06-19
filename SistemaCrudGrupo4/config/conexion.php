<?php

// 1. Definir parametros de conexion
$host = "localhost";
$db_name = "empleados";
$db_username = "root";
$db_password = "";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $db_username);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    die("Error critico en conexion: " . $error->getMessage());
}
