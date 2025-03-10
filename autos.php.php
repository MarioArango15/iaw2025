<?php include 'header.php'; ?>
<?php include 'config.php'; ?>

<h2>Gestión de Autos</h2>
<table border="1">
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Placa</th>
        <th>Precio</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM autos");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['brand']}</td>
                <td>{$row['model']}</td>
                <td>{$row['license_plate']}</td>
                <td>{$row['price']}</td>
              </tr>";
    }
    ?>
</table>

<?php include 'footer.php'; ?>
