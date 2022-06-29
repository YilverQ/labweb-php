<!DOCTYPE html>
<html>
<head lang="es">
	<title>Ejercicio 1: PHP</title>
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
	
	<h1>Ejercicio 1 de PHP</h1>
	<h2>Resultado</h2>
	<?php 
		$area = (($_POST["B"]+$_POST["b"])*$_POST["h"])/2;
		echo "El Area del Trapecio es: ";
		echo "<b>",$area,"</b>";
		echo "cm2"
	 ?>
</body>
</html>