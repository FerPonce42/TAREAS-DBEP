<?php
// Datos de la conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdinamicafer";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión falló
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si el método de la solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Guardar Aptitudes
    if (!empty($_POST['habilidad'])) {
        foreach ($_POST['habilidad'] as $habilidad) {
            $stmt = $conn->prepare("INSERT INTO aptitudes (habilidad) VALUES (?)");
            $stmt->bind_param("s", $habilidad);
            $stmt->execute();
        }
    }

    // Guardar Experiencia Laboral
    if (!empty($_POST['empresa'])) {
        for ($i = 0; $i < count($_POST['empresa']); $i++) {
            $empresa = $_POST['empresa'][$i];
            $cargo = $_POST['cargo'][$i];
            $fecha_inicio = $_POST['fecha_inicio'][$i];
            $fecha_fin = $_POST['fecha_fin'][$i];
            $stmt = $conn->prepare("INSERT INTO experiencia_laboral (empresa, cargo, fecha_inicio, fecha_fin) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $empresa, $cargo, $fecha_inicio, $fecha_fin);
            $stmt->execute();
        }
    }

    // Guardar Formación
    if (!empty($_POST['institucion'])) {
        for ($i = 0; $i < count($_POST['institucion']); $i++) {
            $institucion = $_POST['institucion'][$i];
            $titulo = $_POST['titulo'][$i];
            $fecha_inicio = $_POST['fecha_inicio'][$i];
            $fecha_fin = $_POST['fecha_fin'][$i];
            $stmt = $conn->prepare("INSERT INTO formacion (institucion, titulo, fecha_inicio, fecha_fin) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $institucion, $titulo, $fecha_inicio, $fecha_fin);
            $stmt->execute();
        }
    }

    // Guardar Idiomas
    if (!empty($_POST['idioma'])) {
        for ($i = 0; $i < count($_POST['idioma']); $i++) {
            $idioma = $_POST['idioma'][$i];
            $nivel = $_POST['nivel'][$i];
            $stmt = $conn->prepare("INSERT INTO idiomas (idioma, nivel) VALUES (?, ?)");
            $stmt->bind_param("ss", $idioma, $nivel);
            $stmt->execute();
        }
    }

    // Mensaje de confirmación
    echo "Datos guardados correctamente";
}

// Cerrar la conexión
$conn->close();
?>

<!-- Enlace para regresar al menú -->
<a href="index.php">Volver al menú</a>
