<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>
<body>
<?php
$suma = 0;
for ($i = 1; $i <= 100; $i++) {
	if ($i % 2 == 0) {
		echo $i . " ";
		$suma += $i;
	}
}
echo "<br>Suma acumulada: " . $suma;
?>
</body>
</html>
