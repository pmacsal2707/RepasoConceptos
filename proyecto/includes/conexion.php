<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "filamentos";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
