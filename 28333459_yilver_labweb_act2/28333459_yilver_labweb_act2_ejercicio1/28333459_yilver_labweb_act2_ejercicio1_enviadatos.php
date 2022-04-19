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
	<h2>Ingresa los Datos para Calcular el Área de un Trapecio</h2>
	<img src="trapecio.png">
	<form name="datos" action="28333459_yilver_labweb_act2_ejercicio1_recibedatos.php" method="POST">
		<p>Escribe valor de a:</p>
		<input type="number" name="a" required="True" step="0.01"><br>
		<p>Escribe valor de b:</p>
		<input type="number" name="b" required="True" step="0.01"><br>
		<p>Escribe valor de B:</p>
		<input type="number" name="B" required="True" step="0.01"><br>
		<p>Escribe valor de h:</p>
		<input type="number" name="h" required="True" step="0.01"><br>
		<br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>