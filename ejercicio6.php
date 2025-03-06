<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 6</title>
</head>
<body>
<?php
$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviebre", "Diciembre"];
sort($meses);
foreach ($meses as $mes) {
	echo $mes . "<br>";
}
?>
</body>
</html>
