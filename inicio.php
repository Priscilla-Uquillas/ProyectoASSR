<?php 
	session_start();

	if(isset($_SESSION['user'])){
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php require_once "scripts.php"; ?>
</head>
<body style="background-image: url('img/fondo.jpg')">
<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="jumbotron">
				<h2>Entraste con exito </h2>
				<h3>BIENVENIDO</h3>
				<a href="php/salir.php" class="btn btn-info">Salir del sistema</a>
				<a href="mainwindow/inicio.php" class="btn btn-info">Continuar</a>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
 ?>
