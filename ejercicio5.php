<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 5</title>
</head>
<body>
<?php
function redondear($numero){
	return intval($numero * 1000 + 0,5) / 1000;
}
echo redondear(3.14159);
?>
</body>
</html>