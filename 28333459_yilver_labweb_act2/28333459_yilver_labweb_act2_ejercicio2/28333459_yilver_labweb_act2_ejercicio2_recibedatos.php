<!DOCTYPE html>
<html>
<head lang="es">
	<title>Ejercicio 2: PHP</title>
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
	
	<h1>Ejercicio 2 de PHP</h1>
	<h2>Resultado</h2>
	<?php 
		$numeroA = $_POST["valorA"];
		$numeroB = $_POST["valorB"];
		if ($_POST["valorA"] > $_POST["valorB"]) {
			echo "<b>El Numero A Es el Mayor</b>";
		} elseif ($_POST["valorA"] < $_POST["valorB"]) {
			echo "<b>El Numero B Es el Mayor</b>";
		} else {
			echo "<b>No Hay Numero Mayor, Ambos Son Iguales</b>";
		}
	 ?>
</body>
</html>