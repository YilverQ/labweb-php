<!DOCTYPE html>
<html lang="es">
<head>
	<title>28333459_yilver_labweb_ejercicio1</title>
	<meta charset="utf-8">
</head>
<body>
	<h1 style="text-align: center;">Ejercicio 1</h1>
	<p><b>Imprima los números del 1 al 1000.</b></p>
	<?php  
		for ($i=0; $i < 1000; $i++) { 
			echo $i +  1, " ";
			/*La Condicion if es para dar saltos de lineas cada 100 numeros*/
			if (($i + 1) % 100 == 0) {
				echo "<br> <br> <br>";
			}
		}
	?>
</body>
</html>