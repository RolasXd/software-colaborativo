<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_colaborativo";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión es correcta
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} 

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["password"];

// Insertar datos en la tabla usuarios
$sql = "INSERT INTO usuarios (nombre, email, password)
VALUES ('$nombre', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header('Location: login.php');
    exit;
} else {
    echo "Error al registrar usuario: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
