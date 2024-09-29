<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdinamicafer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$habilidades = $_POST['habilidad'];

foreach ($habilidades as $habilidad) {
    if (empty($habilidad)) {
        die("El campo Habilidad es obligatorio.");
    }

    $sql = "INSERT INTO aptitudes (habilidad) VALUES ('$habilidad')";
    $conn->query($sql);
}

header("Location: index.php");
$conn->close();
?>
