<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 12</title>
</head>
<body>
	<?php
	$servidor = 'localhost:3306';
    $usuario = 'root';
    $password = '';
    $conexion = mysqli_connect($servidor, $usuario, $password);
	
    if(!$conexion ){
         echo 'Conexión fallida<br>';
     }
	else{

		$sql = "CREATE DATABASE IF NOT EXISTS alumnos";
		if (mysqli_query($conexion, $sql)) {
            echo "Base de datos creada con éxito";
		} else {
            echo "Error: " . mysqli_error($conexion);
		}

		mysqli_select_db($conexion,"alumnos");
		
		$sql2 = "CREATE TABLE clientes(nombre VARCHAR(20))";  
         
         if(mysqli_query($conexion, $sql2)){  
         echo "Tabla creada correctamente";  
         } else {  
            echo "Tabla no creada correctamente ";  
         }  
	}
	
?>
</body>
</html>