<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit;
}

$email = $_SESSION["email"];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Bienvenida</title>
	<link rel="stylesheet" type="text/css" href="../styles/bienvenida.css">
</head>
<body>
     <!-- Inicio Navbar -->
	 
    <header>
        <div class="interior">
            <a href="" class="logoNav"><img src="/img/icon.png" alt=""></a>
            <nav class="navegacion">
                <ul>
                    <li><a href="/index.php">Inicio</a></li>
                    <li><a href="">Acerca de</a></li>
                    <li class="submenu">
                        <a href="">Herramientas</a>
                        <ul class="hijos">
                            <li><a href="">Item1</a></li>
                            <li><a href="">Item2</a></li>
                            <li><a href="">Item3</a></li>
                            <li><a href="">Item4</a></li>
                        </ul>
                    </li>
                    <li><a href="">Contacto</a></li>

				</ul>
            </nav>
        </div>
    </header>
    <!-- Fin Navbar -->

	
	<!-- Barra lateral -->
	<div class="sidebar">
		<a href="#">Crear proyecto</a>
		<a href="#">Mis proyectos</a>
		<a href="">Perfil <p><?php echo $email; ?></p></a>
        <a href="../Usuario/closed_session.php">Cerrar sesion</a>
	
	</div>

	<!-- Contenido principal -->
	<div class="main">
		<h2>Bienvenido</h2>
		<p>Has ingresado exitosamente al sistema.</p>
	</div>

</body>
</html>
<!-- CSS de Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- JavaScript de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

