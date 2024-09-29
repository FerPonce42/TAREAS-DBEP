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
$habilidad = $_POST['habilidad'];

// Insertar datos en la tabla
$sql = "INSERT INTO aptitudes (habilidad) VALUES ('$habilidad')";

if ($conn->query($sql) === TRUE) {
    echo "Nueva aptitud/habilidad guardada exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
