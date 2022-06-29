<!DOCTYPE html>
<html lang="es">
<head>
	<title>28333459_yilver_labweb_ejercicio3</title>
	<meta charset="utf-8">
</head>
<body>
	<h1 style="text-align: center;">Ejercicio 3</h1>
	<p><b>Resultado:</b></p>
	<?php 
		$numero = $_POST["multiplicar"];
		echo "Tabla de multiplicar del: " , $numero , "<br>";
		for ($i=0; $i < 10; $i++) {
			echo $numero , " X " , $i + 1 , " = " , ($numero * ($i + 1)) , "<br>"; 
		}
	 ?>
</body>
</html>