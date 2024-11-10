<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdinamicafer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Guardados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Datos Almacenados</h2>

<!-- Mostrar Aptitudes -->
<h3>Aptitudes</h3>
<table>
    <tr>
        <th>Habilidad</th>
    </tr>
    <?php
    $sql = "SELECT * FROM aptitudes";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["habilidad"] . "</td></tr>";
        }
    } else {
        echo "<tr><td>No hay aptitudes registradas.</td></tr>";
    }
    ?>
</table>

<!-- Mostrar Experiencia Laboral -->
<h3>Experiencia Laboral</h3>
<table>
    <tr>
        <th>Empresa</th>
        <th>Cargo</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
    </tr>
    <?php
    $sql = "SELECT * FROM experiencia_laboral";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["empresa"] . "</td><td>" . $row["cargo"] . "</td><td>" . $row["fecha_inicio"] . "</td><td>" . $row["fecha_fin"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No hay experiencia laboral registrada.</td></tr>";
    }
    ?>
</table>

<!-- Mostrar Formación -->
<h3>Formación</h3>
<table>
    <tr>
        <th>Institución</th>
        <th>Título</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
    </tr>
    <?php
    $sql = "SELECT * FROM formacion";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["institucion"] . "</td><td>" . $row["titulo"] . "</td><td>" . $row["fecha_inicio"] . "</td><td>" . $row["fecha_fin"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No hay formación registrada.</td></tr>";
    }
    ?>
</table>

<!-- Mostrar Idiomas -->
<h3>Idiomas</h3>
<table>
    <tr>
        <th>Idioma</th>
        <th>Nivel</th>
    </tr>
    <?php
    $sql = "SELECT * FROM idiomas";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["idioma"] . "</td><td>" . $row["nivel"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='2'>No hay idiomas registrados.</td></tr>";
    }
    ?>
</table>

<a href="formulario_datos.php">Volver al formulario</a>

</body>
</html>

<?php
$conn->close();
?>
