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
$empresa = $_POST['empresa'];
$cargo = $_POST['cargo'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];

// Insertar datos en la tabla
$sql = "INSERT INTO experiencia_laboral (empresa, cargo, fecha_inicio, fecha_fin) VALUES ('$empresa', '$cargo', '$fecha_inicio', '$fecha_fin')";

if ($conn->query($sql) === TRUE) {
    echo "Nueva experiencia laboral guardada exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
