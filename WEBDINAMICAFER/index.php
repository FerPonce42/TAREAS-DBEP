<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Datos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Resumen de Datos</h2>

<h3>Experiencia Laboral</h3>
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

// Consultar datos de Experiencia Laboral
$sql = "SELECT * FROM experiencia_laboral";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Empresa</th>
                <th>Cargo</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["empresa"]."</td>
                <td>".$row["cargo"]."</td>
                <td>".$row["fecha_inicio"]."</td>
                <td>".$row["fecha_fin"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No hay resultados en Experiencia Laboral.</p>";
}
?>

<h3>Formación</h3>
<?php
// Consultar datos de Formación
$sql = "SELECT * FROM formacion";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Institución</th>
                <th>Título Obtenido</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["institucion"]."</td>
                <td>".$row["titulo"]."</td>
                <td>".$row["fecha_inicio"]."</td>
                <td>".$row["fecha_fin"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No hay resultados en Formación.</p>";
}
?>

<h3>Idiomas</h3>
<?php
// Consultar datos de Idiomas
$sql = "SELECT * FROM idiomas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Idioma</th>
                <th>Nivel</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["idioma"]."</td>
                <td>".$row["nivel"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No hay resultados en Idiomas.</p>";
}
?>

<h3>Aptitudes/Habilidades</h3>
<?php
// Consultar datos de Aptitudes
$sql = "SELECT * FROM aptitudes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Habilidad</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["habilidad"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No hay resultados en Aptitudes.</p>";
}

$conn->close();
?>

</body>
</html>
