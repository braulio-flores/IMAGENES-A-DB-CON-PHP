<!DOCTYPE html>
<html>
<head>
	<title>FORM SUBIDA</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<center>
		<br><br><br>
		<form action="./proceso_guardar.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="nombre" placeholder="Nomre de la Imagen" required/><br><br>
			<input type="file" name="Imagen" class="todo" required/><br><br>
			<input type="submit" value="Enviar Imagen" class="todo">
		</form>
		<br><br><br>
	</center>
	<a href="./mostrar.php">Mostrar Galeria</a>
</body>
</html>