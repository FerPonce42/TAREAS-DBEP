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
$institucion = $_POST['institucion'];
$titulo = $_POST['titulo'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];

// Insertar datos en la tabla
$sql = "INSERT INTO formacion (institucion, titulo, fecha_inicio, fecha_fin) VALUES ('$institucion', '$titulo', '$fecha_inicio', '$fecha_fin')";

if ($conn->query($sql) === TRUE) {
    echo "Nueva formación guardada exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
