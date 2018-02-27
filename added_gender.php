<!DOCTYPE HTML>
<html>
	<head>
		<title>Romanov Download free books </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Romanov</h1>
											<p>Descarga Libros Gratis</p>
										</header>
									</div>
									
								</section>

							<!-- Section -->
								<section>
								<div class="features">
										<article>
											<span class="images/descarga.jpg"></span>
											<div class="content">
												<h3>Romanov Biblioteca Virtual</h3>
												<p>Esta biblioteca es para uso público, no sólo para las tareas también para leer por un tiempo y distraer.
Si eres un lector apasionado estás en el lugar correcto.</p>
											</div>
										</article>
										
									</div>
								</section>

							<!-- Section -->
								<section>
									<?php

$conexion = mysqli_connect("localhost", "root", "", "library");
if ($conexion) {
    echo 'Conexion Exitosa';
} else {
    echo 'Problemas Al Conectar';
}

$id_gender=$_POST['id_gender'];
$gender=$_POST['gender'];
$verify = "select * from genders where gender='$gender'";
$veri= mysqli_query($conexion, $verify);
if($veri){echo '<script> alert("El genero libro ya esta registrado");</script>';
    echo '<script> window.location="add_gender.html"; </script>';}else{
    $consulta = "insert into gender(id_gender,gender) values ('$id_gender','$gender')" ;
}
echo "<br>";
$datos = mysqli_query($conexion, $consulta);
if ($consulta) {
    echo 'Registro Exitoso';
} else {
    echo 'Problemas Al Registro';
}
?>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index_loger.html">Inicio</a></li>
										<li>
											<span class="opener">Audiolibros</span>
											<ul>
												<li><a href="conn_audio.php">Audiolibros</a></li>
												<li><a href="add_audio.html">Añadir Audiolibros</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Libros</span>
											<ul>
												<li><a href="conn_book.php">Libros</a></li>
												<li><a href="add_book.html">Añadir Libros</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Editoriales</span>
											<ul>
												<li><a href="conn_editorial.php">Editoriales</a></li>
												<li><a href="add_editorial.html">Añadir Editoriales</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Generos</span>
											<ul>
												<li><a href="conn_gender.php">Generos</a></li>
												<li><a href="add_gender.html">Añadir Generos</a></li>
											</ul>
										</li>
										<li><a href="http://feriadellibro.com/">Feria Del Libro 2017</a></li>
										<li><a href="gameover.php">Salir</a></li>
										
										
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Estar en contacto</h2>
									</header>
									<p>En caso de que no pueda encontrar un libro que desee agregar a la biblioteca virtual, póngase en contacto con nosotros en el siguiente correo electrónico o teléfono.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="">santhyzfova@gmail.com</a></li>
										<li class="fa-phone">317-333-7449</li>
										<li class="fa-home">Google</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright"><br><center>All rights reserved®.</center ></p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>