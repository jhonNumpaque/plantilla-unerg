<?php 

$plantilla = new Plantilla();

class Plantilla{

	public function __construct(){
		?>
			<!DOCTYPE html>

			<html lang="es">
			<head>
				<meta charset="UTF-8">
				<title>Plantilla</title>
				<link rel="stylesheet" href="css/estilo.css">
			</head>
			<body>

				<div class="contenedor">
					<header class="baner"></header>
					<nav class="nav">
							<ul>
								<li><a href="#">menu</a></li>
								<li><a href="#">menu</a></li>
								<li><a href="#">menu</a></li>
								<li><a href="#">menu</a></li>
							</ul>
						</nav>
					<section class="cuerpo">
		<?php 
	}

	public function __destruct(){
		?>
		</section>

			
				<footer class="footer">UNERG</footer>
			</div>
			
		</body>
		</html>
		<?php
	}
}

?>
