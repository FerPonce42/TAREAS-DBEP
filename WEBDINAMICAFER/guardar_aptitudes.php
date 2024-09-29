<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdinamicafer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$habilidad = $_POST['habilidad'];

$sql = "INSERT INTO aptitudes (habilidad) VALUES ('$habilidad')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Redirige a index.php después de guardar
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
