<?php
$host_db = "sql205.infinityfree.com";
$user_db = "if0_35173729";
$pass_db = "AvAESRzUu3zD6J";
$db_name = "if0_35173729_prueba";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("Error en la conexión: " . $conexion->connect_error);
}
?>