<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
	header("location: index.php");
}else{
echo "<h1>BIENVENIDO $usuario</h1<>";
echo "<title>$usuario</title>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<form action='Logueo/salir.php'>
	<input type="submit" name="sesionDestroy" value="Cerrar sesion"/>
</form>
</body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<div class="productos">

		<ul class="lista-producto">
			<li>
				<div class="containerimg">
					<img src="resources/img1.jpg" alt="" class="imgproducto">
						<div class="informacion">
							<p class="nombreimg">Ventanas</p>
							<a href="" class="informacion">Ver mas información</a>
						</div>
				</div>
			</li>

			<li>
				<div class="containerimg">
					<img src="resources/img2.jpg" alt="" class="imgproducto">
						<div class="informacion">
							<p class="nombreimg">Ventanas</p>
							<a href="" class="informacion">Ver mas información</a>
						</div>
				</div>
			</li>

			<li>
				<div class="containerimg">
					<img src="resources/img3.jpg" alt="" class="imgproducto">
						<div class="informacion">
							<p class="nombreimg">Ventanas</p>
							<a href="" class="informacion">Ver mas información</a>
						</div>
				</div>
			</li>
		</ul>
	</div>







</html>