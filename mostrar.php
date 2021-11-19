<!DOCTYPE html>
<html>
<head>
	<title>MOSTRAR</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<?php 
		include("conexion.php");
		$query = "SELECT * FROM subida";
		$resultado = $conexion->query($query);
	?>
	<a href="index.php">Subir nueva Imagen</a>
	<table>
		<tr>
			<td colspan="2">IMAGENES DE LA BD</td>
		</tr>
		<tr>

			<td>Nombre</td>
			<td>Imagen</td>
		</tr>
			<?php
			while ($row = $resultado->fetch_assoc()) {
				?>
				<tr>
				<td><?php echo $row['Nombre']; ?></td>
				<td><img src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']) ?>"/></td>
				</tr>
			<?php
			}
			?>
	</table>

	
		
	</body>
</html>