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
$consulta = "select * from books";
$datos = mysqli_query($conexion, $consulta);


echo "<table border='solid'>";
echo "<tr><td>Id Libro</td><td>Nombre</td><td>Autor</td><td>Reseña</td><td>Lee & Descarga</td><td>Id Genero</td></tr>";
while ($row = mysqli_fetch_array($datos)) {
    echo '<tr>';
    echo "<td>" . $row['id_book'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['author'] . "</td>";
    echo "<td><a href=".$row['reviews'].">Reseña</a></td>";
    echo "<td><a href=".$row['read_down'].">Lee & Descarga</a></td>";
    echo "<td>" . $row['id_gender'] . "</td>";
    echo "<td><a href='changes_b.php?codBook=".$row['id_book']."'>Cambiar</a></td>";
	echo "<td><a href='drop_book.php?codBook=".$row['id_book']."'>Eliminar</a></td>";
}

echo '</table>';
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
										<li><a href="index_admin.html">Inicio</a></li>
										<li>
											<span class="opener">Audiolibros</span>
											<ul>
												<li><a href="conn_audioa.php">Audiolibros</a></li>
												<li><a href="add_audioa.php">Añadir Audiolibros</a></li>
												<li><a href="change_audio.php">Cambiar Audiolibros</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Libros</span>
											<ul>
												<li><a href="conn_booka.php">Libros</a></li>
												<li><a href="add_booka.html">Añadir Libros</a></li>
												<li><a href="change_book.php">Cambiar Libros</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Editoriales</span>
											<ul>
												<li><a href="conn_editoriala.php">Editoriales</a></li>
												<li><a href="add_editoriala.html">Añadir Editoriales</a></li>
												<li><a href="change_editorial.php">Cambiar Editoriales</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Generos</span>
											<ul>
												<li><a href="conn_gendera.php">Generos</a></li>
												<li><a href="add_gendera.html">Añadir Generos</a></li>
												<li><a href="change_gender.php">Cambiar Generos</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Usuarios</span>
											<ul>
												<li><a href="conn.php">Usuarios</a></li>
												<li><a href="add.html">Añadir Usuario</a></li>												
												<li><a href="change.php">Cambiar Usuario</a></li>
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