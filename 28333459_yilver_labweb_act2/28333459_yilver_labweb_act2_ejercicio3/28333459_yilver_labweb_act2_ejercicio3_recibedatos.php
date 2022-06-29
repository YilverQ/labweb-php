<!DOCTYPE html>
<html>
<head lang="es">
	<title>Ejercicio 3: PHP</title>
	<meta charset="utf-8">
</head>
<body>	
	<!-- Identificación del Estudiante -->
	<div class="indentificación">
		<p>Numero de Cedula: 28.333.459</p>
		<p>Nombre del Estudiante: Yilver Quevedo</p>
		<p>Unidad Curricular: Laboratorio de Aplicaciones Web</p>
		<p>Numero de Actividad: Actividad 2</p>
	</div>
	
	<h1>Ejercicio 3 de PHP</h1>
	<h2>Resultado</h2>
	<?php 
		$dolar = $_POST["valorDolar"];
		$precio = $_POST["precioConvertir"];
		$total = $dolar * $precio;
		echo "El precio Convertido: <br>";
		echo "Dolares: ", $precio, "$ = ", $total, "bsf";
	 ?>
</body>
</html>