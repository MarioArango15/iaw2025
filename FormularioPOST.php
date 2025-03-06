<!DOCTYPE html>
<html>
<head>
    <title>Pedido de Panadería</title>
</head>
<body>

    <h2>Realizar Pedido</h2>
    <form action="procesar_post.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="baguettes">Baguettes:</label>
        <input type="number" id="baguettes" name="baguettes" min="0" value="0"><br><br>

        <label for="panecillos">Panecillos:</label>
        <input type="number" id="panecillos" name="panecillos" min="0" value="0"><br><br>

        <label for="pan_sandwich">Pan de Sándwich:</label>
        <input type="number" id="pan_sandwich" name="pan_sandwich" min="0" value="0"><br><br>

        <input type="submit" value="Realizar Pedido">
    </form>
</body>
</html>