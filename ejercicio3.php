<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 3</title>
</head>
<body>
<?php
$i = 1;
$suma = 0;
while ($i <= 50) {
	$cuadrado = $i * $i;
	echo "El cuadrado de $i es: $cuadrado <br>";
	$suma += $cuadrado;
	$i++;
}
echo "Suma total: " . $suma;
?>
</body>
</html>
