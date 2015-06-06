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
			<script src="js/Desplegable.js" type="text/javascript" charset="utf-8"></script>
		</head>
		<body>
			<div class="contenedor">
				<header class="baner"></header>
				<nav class="nav">
					<ul>
						<li class="titulo1" ><h1>O</h1></li>
						<li class="titulo2"><h1>V</h1></li>
						<li class="titulo3"><h1>I</h1></li>
						<li><a href="index.php">Validaciones</a></li>
						<li><a href="#">Pagina2</a></li>
						<li><a href="#">Pagina3 </a></li>
						<li onmouseover="Desplegar();" onmouseout="Recojer();"><a href="#">menu</a>
							<div id="SubMenu">
							
							<ul>
								<li><a href="#">Submenu1</a></li>
								<li><a href="#">Submenu2</a></li>
								<li><a href="#">Submenu3</a></li>
							</ul>

							</div>
						</li>
					</ul>
				</nav>
		<section class="cuerpo">
		<?php 
	}
	public function __destruct(){
	?>
		</section>
				<footer class="footer">UNERG Olimpiada Venezolana de Informatica OVI 2015</footer>
			</div>
		</body>
		</html>
		<?php
	}
}
?>