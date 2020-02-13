<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
	header("location: index.php");
}else{
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
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<?php
include("barranav.php") 
?>
<body background="resources/back-contacto.jpg">


</body>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<<<<<<< HEAD
	<div class="productos">

		<ul class="lista-producto">
			<li>
				<div class="containerimg">
					<img src="resources/img1.jpg" alt="" class="imgproducto">
						<div class="informacion">
							<p class="nombreimg">Ventanas</p>
							<a href="" class="informacion">Ver mas información</a>
=======
	<div class="container-user">

		<ul class="list-image-user">
			<li>
				<div class="container__img">
					<img src="resources/12.jpg" alt="" class="img__">
						<div class="informacion">
							<p class="nombre_img">Ventanas</p>
							<a href="" class="view_informacion">Ver mas información</a>
>>>>>>> 0f97941723dde8b9907db081846bc9f910e6a074
						</div>
				</div>
			</li>

			<li>
<<<<<<< HEAD
				<div class="containerimg">
					<img src="resources/img2.jpg" alt="" class="imgproducto">
						<div class="informacion">
							<p class="nombreimg">Ventanas</p>
							<a href="" class="informacion">Ver mas información</a>
=======
				<div class="container__img">
					<img src="resources/ventana-14347_14347.jpg" alt="" class="img__">
						<div class="informacion">
							<p class="nombre_img">Ventanas</p>
							<a href="" class="view_informacion">Ver mas información</a>
>>>>>>> 0f97941723dde8b9907db081846bc9f910e6a074
						</div>
				</div>
			</li>

			<li>
<<<<<<< HEAD
				<div class="containerimg">
					<img src="resources/img3.jpg" alt="" class="imgproducto">
						<div class="informacion">
							<p class="nombreimg">Ventanas</p>
							<a href="" class="informacion">Ver mas información</a>
=======
				<div class="container__img">
					<img src="resources/Puertas-de-aluminio-10.jpg" alt="" class="img__">
						<div class="informacion">
							<p class="nombre_img">Ventanas</p>
							<a href="" class="view_informacion">Ver mas información</a>
>>>>>>> 0f97941723dde8b9907db081846bc9f910e6a074
						</div>
				</div>
			</li>
		</ul>
<<<<<<< HEAD
	</div>




=======

		<ul class="list-image-user">
			<li>
				<div class="container__img">
					<img src="resources/12.jpg" alt="" class="img__">
						<div class="informacion">
							<p class="nombre_img">Ventanas</p>
							<a href="" class="view_informacion">Ver mas información</a>
						</div>
				</div>
			</li>

			<li>
				<div class="container__img">
					<img src="resources/ventana-14347_14347.jpg" alt="" class="img__">
						<div class="informacion">
							<p class="nombre_img">Ventanas</p>
							<a href="" class="view_informacion">Ver mas información</a>
						</div>
				</div>
			</li>

			<li>
				<div class="container__img">
					<img src="resources/Puertas-de-aluminio-10.jpg" alt="" class="img__">
						<div class="informacion">
							<p class="nombre_img">Ventanas</p>
							<a href="" class="view_informacion">Ver mas información</a>
						</div>
				</div>
			</li>
		</ul>

		<ul class="list-image-user">
			<li>
				<div class="container__img">
					<img src="resources/12.jpg" alt="" class="img__">
						<div class="informacion">
							<p class="nombre_img">Ventanas</p>
							<a href="" class="view_informacion">Ver mas información</a>
						</div>
				</div>
			</li>

			<li>
				<div class="container__img">
					<img src="resources/ventana-14347_14347.jpg" alt="" class="img__">
						<div class="informacion">
							<p class="nombre_img">Ventanas</p>
							<a href="" class="view_informacion">Ver mas información</a>
						</div>
				</div>
			</li>

			<li>
				<div class="container__img">
					<img src="resources/Puertas-de-aluminio-10.jpg" alt="" class="img__">
						<div class="informacion">
							<p class="nombre_img">Ventanas</p>
							<a href="" class="view_informacion">Ver mas información</a>
						</div>
				</div>
			</li>
		</ul>
	</div>
>>>>>>> 0f97941723dde8b9907db081846bc9f910e6a074



</html>