<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdinamicafer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$empresas = $_POST['empresa'];
$cargos = $_POST['cargo'];
$fechas_inicio = $_POST['fecha_inicio'];
$fechas_fin = $_POST['fecha_fin'];

foreach ($empresas as $i => $empresa) {
    if (empty($empresa) || empty($cargos[$i]) || empty($fechas_inicio[$i])) {
        die("Los campos Empresa, Cargo y Fecha de Inicio son obligatorios.");
    }
    if (!empty($fechas_fin[$i]) && $fechas_fin[$i] < $fechas_inicio[$i]) {
        die("La fecha de fin no puede ser anterior a la fecha de inicio en el campo " . ($i + 1));
    }

    $sql = "INSERT INTO experiencia_laboral (empresa, cargo, fecha_inicio, fecha_fin) VALUES ('$empresa', '$cargos[$i]', '$fechas_inicio[$i]', '$fechas_fin[$i]')";
    $conn->query($sql);
}

header("Location: index.php");
$conn->close();
?>
