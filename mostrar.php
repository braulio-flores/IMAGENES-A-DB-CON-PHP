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
	
		<ul class="photosGrid">
			<?php
			while ($row = $resultado->fetch_assoc()) {
				?>
				<li class="movieCard">
					<img width="325px" height="216px" src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']) ?>"/>
					<div><?php echo $row['Nombre']; ?></div>
				</li>
			<?php
			}
			?>
		</ul>
	</body>
</html>