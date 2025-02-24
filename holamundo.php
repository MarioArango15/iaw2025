<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		print("Hello Wordl! from IES Poligono Sur");
		echo "<br>";
		define("SALUDO", "Bienvenido al IES Poligono Sur");
		echo SALUDO;
		echo "<br>";
			$nombre = "Juan";
			$edad = 25;
			$ciudad = "Madrid";
			$esMayorDeEdad = true;
			$altura = 1.83;

			echo "Nombre: $nombre <br>";
			echo "Edad: $edad <br>";
			echo "Ciudad: $ciudad <br>";
			echo "Es mayor de edad: " . ($esMayorDeEdad ? "Sí" : "No") . "<br>";
			echo "Altura: $altura m <br>";
	?>
</body>
</html>