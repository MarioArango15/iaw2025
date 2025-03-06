<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $baguettes = htmlspecialchars($_POST["baguettes"]);
    $panecillos = htmlspecialchars($_POST["panecillos"]);
    $pan_sandwich = htmlspecialchars($_POST["pan_sandwich"]);

    echo "<h2>Resumen del Pedido</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Baguettes: $baguettes</p>";
    echo "<p>Panecillos: $panecillos</p>";
    echo "<p>Pan de Sándwich: $pan_sandwich</p>";
}
?>