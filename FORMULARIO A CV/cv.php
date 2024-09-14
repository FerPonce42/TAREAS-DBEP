<?php
// Verificar si se ha enviado una foto
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto']['tmp_name'];
    $foto_path = 'uploads/' . basename($_FILES['foto']['name']);
    
    // Crear el directorio de subida si no existe
    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }
    
    // Mover el archivo subido al directorio de destino
    if (move_uploaded_file($tmp_name, $foto_path)) {
        // La foto se ha subido exitosamente
    } else {
        $foto_path = 'fotocara.png'; // Ruta de la foto por defecto en caso de erroorrr
    }
} else {
    $foto_path = 'fotocara.png'; // Ruta de la foto por defecto si no se sube ninguna foto
}

// Capturamos todos los datos enviados desde el formulario
$nombre = $_POST['nombre'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$ocupacion = $_POST['ocupacion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$nacionalidad = $_POST['nacionalidad'];
$nivel_ingles = $_POST['nivel_ingles'];
$lenguajes_programacion = $_POST['lenguajes_programacion'];
$habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : []; // Evitar error si no se selecciona ninguna habilidad
$aptitudes = $_POST['aptitudes'];
$perfil = $_POST['perfil'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum de <?php echo htmlspecialchars($nombre); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #262626;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            overflow-x: hidden;
        }
        .container {
            width: 60%;
            background-color: #262626;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin-top: 20px;
            padding-bottom: 20px;
            box-sizing: border-box;
        }
        .header {
            background-color: #002138;
            height: 180px;
            text-align: center;
            padding: 20px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .columns {
            display: grid;
            grid-template-columns: 30% 70%;
            grid-gap: 0;
        }
        .left-column {
            background-color: #003E69;
            padding: 20px;
            box-sizing: border-box;
            color: #ffffff;
        }
        .right-column {
            background-color: #D4D4D4;
            padding: 20px;
            box-sizing: border-box;
            color: #000000;
        }
        h3 {
            margin-bottom: 0;
        }
        hr {
            border: 0;
            border-top: 1px solid;
            margin: 2px 0;
            padding: 0;
        }
        ul {
            padding-left: 20px;
            margin-top: 5px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sección de encabezado con foto y nombre -->
        <div class="header">
            <table class="header-table">
                <tr>
                    <td style="padding-right: 20px;">
                        <!-- Imagen de perfil -->
                        <img src="<?php echo htmlspecialchars($foto_path); ?>" alt="FOTO CARA" style="max-width: 150px; max-height: 150px;">
                    </td>
                    <td>
                        <div style="text-align: center; padding-left: 20px;">
                            <h1><?php echo htmlspecialchars($nombre); ?></h1>
                            <p>Puesto Buscado: <?php echo htmlspecialchars($ocupacion); ?></p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="columns">
            <!-- Columna izquierda: Contacto, Datos Personales, Idiomas, etc. -->
            <div class="left-column">
                <div>
                    <h3>CONTACTO:</h3>
                    <hr>
                    <p><i class="fas fa-phone-alt"></i> <?php echo htmlspecialchars($telefono); ?></p>
                    <p><i class="fas fa-envelope"></i> <?php echo htmlspecialchars($email); ?></p>
                    <br>

                    <!-- Sección de Datos Personales -->
                    <h3>DATOS PERSONALES:</h3>
                    <hr>
                    <p>Fecha de Nacimiento: <?php echo htmlspecialchars($fecha_nacimiento); ?></p>
                    <p>Nacionalidad: <?php echo htmlspecialchars($nacionalidad); ?></p>
                    <br>

                    <!-- Sección de Idiomas -->
                    <h3>IDIOMAS:</h3>
                    <hr>
                    <p>Nivel de Inglés: <?php echo htmlspecialchars($nivel_ingles); ?></p>
                    <br>
                    
                    <!-- Sección de Lenguajes de Programación -->
                    <h3>LENGUAJES DE PROGRAMACIÓN:</h3>
                    <hr>
                    <ul>
                        <?php foreach ($lenguajes_programacion as $lenguaje): ?>
                            <li><?php echo htmlspecialchars($lenguaje); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <br>

                    <!-- Sección de Habilidades -->
                    <h3>HABILIDADES:</h3>
                    <hr>
                    <ul>
                        <?php foreach ($habilidades as $habilidad): ?>
                            <li><?php echo htmlspecialchars($habilidad); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Columna derecha: Perfil Profesional -->
            <div class="right-column">
                <h3>PERFIL PROFESIONAL</h3>
                <hr>
                <p><?php echo nl2br(htmlspecialchars($perfil)); ?></p>
            </div>
        </div>
    </div>
</body>
</html>