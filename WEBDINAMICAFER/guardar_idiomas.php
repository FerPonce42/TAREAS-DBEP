<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia si tu usuario es diferente
$password = ""; // Cambia si tienes contraseña
$dbname = "webdinamicafer"; // Tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$idioma = $_POST['idioma'];
$nivel = $_POST['nivel'];

// Insertar datos en la tabla
$sql = "INSERT INTO idiomas (idioma, nivel) VALUES ('$idioma', '$nivel')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo idioma guardado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
