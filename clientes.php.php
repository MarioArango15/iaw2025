<?php include 'header.php'; ?>
<?php include 'config.php'; ?>

<h2>Gestión de Clientes</h2>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>DNI</th>
        <th>Teléfono</th>
        <th>Email</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM clientes");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['dni']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['email']}</td>
              </tr>";
    }
    ?>
</table>

<?php include 'footer.php'; ?>
