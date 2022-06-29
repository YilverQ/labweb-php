<!DOCTYPE html>
<html lang="es">
<head>
	<title>28333459_yilver_labweb_ejercicio2</title>
	<meta charset="utf-8">
</head>
<body>
	<h1 style="text-align: center;">Ejercicio 2</h1>
	<p><b>Imprima los números pares del 1 al 1000.</b></p>
	<?php  
		$num = 2;
		while ($num <= 1000) {
			echo $num , " ";
			/*La Condicion if es para dar saltos de lineas cada 100 numeros*/
			if ($num % 100 == 0) {
				echo "<br> <br> <br>";
			}
			$num += 2;
		}
	?>
</body>
</html>