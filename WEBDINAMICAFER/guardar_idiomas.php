<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdinamicafer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$idiomas = $_POST['idioma'];
$niveles = $_POST['nivel'];

foreach ($idiomas as $i => $idioma) {
    if (empty($idioma) || empty($niveles[$i])) {
        die("Los campos Idioma y Nivel son obligatorios.");
    }

    $sql = "INSERT INTO idiomas (idioma, nivel) VALUES ('$idioma', '$niveles[$i]')";
    $conn->query($sql);
}

header("Location: index.php");
$conn->close();
?>
