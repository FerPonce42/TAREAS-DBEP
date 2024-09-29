<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdinamicafer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$empresa = $_POST['empresa'];
$cargo = $_POST['cargo'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];

$sql = "INSERT INTO experiencia_laboral (empresa, cargo, fecha_inicio, fecha_fin) VALUES ('$empresa', '$cargo', '$fecha_inicio', '$fecha_fin')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Redirige a index.php después de guardar
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
