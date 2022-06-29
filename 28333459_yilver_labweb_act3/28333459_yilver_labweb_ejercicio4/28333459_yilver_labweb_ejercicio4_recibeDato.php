<!DOCTYPE html>
<html lang="es">
<head>
	<title>28333459_yilver_labweb_ejercicio4</title>
	<meta charset="utf-8">
</head>
<body>
	<h1 style="text-align: center;">Ejercicio 4</h1>
	<p><b>Resultado:</b></p>
	<?php 
		$numero = $_POST["factorial"];
		$resultado = 1;
		$i = 0;
		while ($i != $numero) {
			$i = $i + 1;
			$resultado = $resultado * $i; 
		}
		echo "El factorial de: " , $numero , " Es: ", $resultado;
	?>
</body>
</html>