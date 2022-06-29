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
	<h2>Convertidor de Dolares a Bolivares</h2>
	<form name="datos" action="28333459_yilver_labweb_act2_ejercicio3_recibedatos.php" method="POST">
		<p>Escribe el valor del Dolar (bsf):</p>
		<input type="number" name="valorDolar" required="True"><br>
		<p>Escribe un Monto a Convertir::</p>
		<input type="number" name="precioConvertir" required="True"><br>
		<br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>