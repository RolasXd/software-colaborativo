<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener valores de los campos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "proyecto_colaborativo";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consultar la base de datos para verificar si el usuario existe
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        // Usuario encontrado
        $_SESSION["email"] = $email;
        header("Location: bienvenida.php");
        exit;
    } else {
        // Usuario no encontrado
        header("location: error.php");
        exit;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


<!-- Contenedor del Login -->
<div id="contenido" class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
            
            <div class="d-flex justify-content-center">
                <img src="../img/icons/login-icon.svg" alt="login-icon" style="height: 7rem"/>
            </div>

        <div class="text-center fs-1 fw-bold">Login</div>
        
        <!-- Input Username -->
        <div class="input-group mt-4">
            <div id="bgIcons" class="input-group-text">
                <img src="../img/icons/username-icon.svg" alt="username-icon" style="height: 1rem"/>
            </div>

            <input class="form-control bg-light" type="email" placeholder="Correo electronico"/>
        </div>

        <!-- Input Password -->
        <div class="input-group mt-1">
        <div class="input-group-text" id="bgIcons">
                <img src="../img/icons/password-icon.svg" alt="password-icon" style="height: 1rem"/>
            </div>
            <input class="form-control bg-light" type="password" placeholder="Password"/>
        </div>

        <div class="d-flex justify-content-around mt-1">
        <div class="d-flex align-items-center gap-1">
                <input class="form-check-input" type="checkbox" />
            <div class="pt-1" style="font-size: 0.9rem">Remember me</div>
        </div>
        <div class="pt-1">
            <a href="#" class="text-decoration-none text-#00ADEF fw-semibold fst-italic"
            style="font-size: 0.9rem">Forgot your password?</a>
        </div>
        </div>
        
        <!-- BTN Login -->
        <div id="btnLogin" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">Login</div>
        
        <!-- BOTÓN PARA NADA -->
        <div id="btnLogin" class="btn btn-info text-white w-100 mt-2 fw-semibold shadow-sm">
            <a class="text-white" href="../Modulos/proyectos.html">Proyects</a>
        </div>   
        <!-- FIN BOTÓN NADA -->

        <div class="d-flex gap-1 justify-content-center mt-1">
            <div>Don't have an account?</div>
                <a href="http://localhost/ProyectoColaborativo/Vistas/Usuario/registro.php" class="text-decoration-none fw-semibold">Register</a>
        </div>

        <div class="p-3">
            <div class="border-bottom text-center" style="height: 0.9rem">
                <span class="bg-white px-3">or</span>
            </div>
        </div>

        <div class="btn d-flex gap-2 justify-content-center border mt-3 shadow-sm">
            <img src="../img/icons/google-icon.svg" alt="google-icon"style="height: 1.6rem"/>
            
            <div class="fw-semibold text-secondary">
            <a href="https://www.gmail.com">Continue with Google</a>
            </div>
        </div>
      
  </div>

</form>

	<?php
	if (isset($error)) {
		echo "<p>$error</p>";
	}
	?>


</body>
</html>
