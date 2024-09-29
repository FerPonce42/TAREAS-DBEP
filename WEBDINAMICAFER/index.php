<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Formulario</title>
</head>
<body>
    <h2>Experiencia Laboral</h2>
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

    // Consultar datos de experiencia laboral
    $sql = "SELECT * FROM experiencia_laboral";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
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
        echo "0 resultados";
    }

    // Consultar datos de formación
    echo "<h2>Formación</h2>";
    $sql = "SELECT * FROM formacion";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Institución</th>
                    <th>Título</th>
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
        echo "0 resultados";
    }

    // Consultar datos de idiomas
    echo "<h2>Idiomas</h2>";
    $sql = "SELECT * FROM idiomas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
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
        echo "0 resultados";
    }

    // Consultar datos de aptitudes
    echo "<h2>Aptitudes/Habilidades</h2>";
    $sql = "SELECT * FROM aptitudes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
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
        echo "0 resultados";
    }

    $conn->close();
    ?>
</body>
</html>
