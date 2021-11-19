<?php
	include("conexion.php");

	$name = $_POST['nombre'];
	$image = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

	$query = "INSERT INTO subida (Nombre, Imagen) VALUES ('$name','$image')";
	$resultado = $conexion->query($query);

	if ($resultado) {
		echo "INSERTADO";
		header('Location: mostrar.php');
	}
	else{
		echo "NO SE INSERTO";
		header('Location: index.php');
	}
?>