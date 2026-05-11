<?php
$host = "localhost";
$user = "root"; // Usuario por defecto en XAMPP
$pass = "";     // Contraseña por defecto (vacía)
$db   = "sistema_proveedores";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>