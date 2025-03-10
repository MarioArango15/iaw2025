<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"], $_POST["dni"], $_POST["telefono"], $_POST["email"])) {
        $nombre = $_POST["nombre"];
        $dni = $_POST["dni"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];

        $sql = "INSERT INTO clientes (nombre, dni, telefono, email) VALUES ('$nombre', '$dni', '$telefono', '$email')";
        if ($conn->query($sql)) {
            echo "Cliente agregado correctamente.";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

$result = $conn->query("SELECT * FROM clientes");
?>

<h2>Registrar Cliente</h2>
<form method="post">
    Nombre: <input type="text" name="nombre" required><br>
    DNI: <input type="text" name="dni" required><br>
    Teléfono: <input type="text" name="telefono"><br>
    Email: <input type="email" name="email"><br>
    <button type="submit">Registrar</button>
</form>

<h2>Clientes Registrados</h2>
<table border="1">
    <tr><th>ID</th><th>Nombre</th><th>DNI</th><th>Teléfono</th><th>Email</th><th>Acciones</th></tr>
    <?php while ($row = $result->fetch_assoc(<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionaria de Autos</title>
</head>
<body>
    <h1>Gestión de Concesionaria de Autos</h1>
    <nav>
        <a href="clientes.php">Gestión de Clientes</a> |
        <a href="autos.php">Gestión de Autos</a> |
        <a href="compras.php">Registro de Compras</a> |
        <a href="listar_compras.php">Listado de Compras</a>
    </nav>
</body>
</html>