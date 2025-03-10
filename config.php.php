<?php
$host = "localhost";
$user = "root";  // Cambiar si es necesario
$password = "";  // Cambiar si es necesario
$database = "concesionaria";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
