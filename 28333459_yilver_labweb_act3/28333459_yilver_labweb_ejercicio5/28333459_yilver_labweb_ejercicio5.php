<!DOCTYPE html>
<html lang="es">
<head>
	<title>28333459_yilver_labweb_ejercicio5</title>
	<meta charset="utf-8">
</head>
<body>
	<h1 style="text-align: center;">Ejercicio 5</h1>
	<p><b>Realizar un programa en PHP que realice la suma de los 10 primeros numero enteros, utilizando alguna de las sentencias de bucles, ej. 1,2,3,4,5,6,6,7,8,9,10=55</b></p>
	<?php 
		$numero = 1;
		$resultado = 0;
		for ($i=0; $i < 10; $i++) { 
			$resultado = $resultado + ($i + 1);
		}
		echo "El Resultado de los primeros 10 numeros es: " , $resultado;
	?>
</body>
</html>