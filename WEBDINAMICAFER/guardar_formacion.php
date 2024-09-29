<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdinamicafer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$instituciones = $_POST['institucion'];
$titulos = $_POST['titulo'];
$fechas_inicio = $_POST['fecha_inicio'];
$fechas_fin = $_POST['fecha_fin'];

foreach ($instituciones as $i => $institucion) {
    if (empty($institucion) || empty($titulos[$i]) || empty($fechas_inicio[$i])) {
        die("Los campos Institución, Título y Fecha de Inicio son obligatorios.");
    }
    if (!empty($fechas_fin[$i]) && $fechas_fin[$i] < $fechas_inicio[$i]) {
        die("La fecha de fin no puede ser anterior a la fecha de inicio en el campo " . ($i + 1));
    }

    $sql = "INSERT INTO formacion (institucion, titulo, fecha_inicio, fecha_fin) VALUES ('$institucion', '$titulos[$i]', '$fechas_inicio[$i]', '$fechas_fin[$i]')";
    $conn->query($sql);
}

header("Location: index.php");
$conn->close();
?>
