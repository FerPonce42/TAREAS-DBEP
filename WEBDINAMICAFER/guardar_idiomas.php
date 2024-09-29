<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdinamicafer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$idioma = $_POST['idioma'];
$nivel = $_POST['nivel'];

$sql = "INSERT INTO idiomas (idioma, nivel) VALUES ('$idioma', '$nivel')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Redirige a index.php después de guardar
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
