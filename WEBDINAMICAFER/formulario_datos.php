<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Formulario Unificado</h2>
<form action="guardar_datos.php" method="POST">

    <!-- Aptitudes -->
    <h3>Aptitudes/Habilidades</h3>
    <div id="aptitudesContainer">
        <div class="aptitud">
            <label for="habilidad">Habilidad:</label>
            <input type="text" name="habilidad[]" required><br><br>
        </div>
    </div>
    <button type="button" onclick="agregarAptitud()">Agregar más aptitud</button>

    <!-- Experiencia Laboral -->
    <h3>Experiencia Laboral</h3>
    <div id="experienciaContainer">
        <div class="experiencia">
            <label for="empresa">Nombre de la Empresa:</label>
            <input type="text" name="empresa[]" required><br><br>
            <label for="cargo">Cargo Desempeñado:</label>
            <input type="text" name="cargo[]" required><br><br>
            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" name="fecha_inicio[]" required><br><br>
            <label for="fecha_fin">Fecha de Fin:</label>
            <input type="date" name="fecha_fin[]"><br><br>
        </div>
    </div>
    <button type="button" onclick="agregarExperiencia()">Agregar más experiencia</button>

    <!-- Formación -->
    <h3>Formación</h3>
    <div id="formacionContainer">
        <div class="formacion">
            <label for="institucion">Nombre de la Institución:</label>
            <input type="text" name="institucion[]" required><br><br>
            <label for="titulo">Título Obtenido:</label>
            <input type="text" name="titulo[]" required><br><br>
            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" name="fecha_inicio[]" required><br><br>
            <label for="fecha_fin">Fecha de Fin:</label>
            <input type="date" name="fecha_fin[]"><br><br>
        </div>
    </div>
    <button type="button" onclick="agregarFormacion()">Agregar más formación</button>

    <!-- Idiomas -->
    <h3>Idiomas</h3>
    <div id="idiomasContainer">
        <div class="idioma">
            <label for="idioma">Idioma:</label>
            <input type="text" name="idioma[]" required><br><br>
            <label for="nivel">Nivel:</label>
            <input type="text" name="nivel[]" required><br><br>
        </div>
    </div>
    <button type="button" onclick="agregarIdioma()">Agregar más idioma</button>

    <input type="submit" value="Guardar">
</form>

<script>
    function agregarAptitud() {
        const container = document.getElementById("aptitudesContainer");
        const nuevaAptitud = document.createElement("div");
        nuevaAptitud.className = "aptitud";
        nuevaAptitud.innerHTML = `
            <label for="habilidad">Habilidad:</label>
            <input type="text" name="habilidad[]" required><br><br>
        `;
        container.appendChild(nuevaAptitud);
    }

    function agregarExperiencia() {
        const container = document.getElementById("experienciaContainer");
        const nuevaExperiencia = document.createElement("div");
        nuevaExperiencia.className = "experiencia";
        nuevaExperiencia.innerHTML = `
            <label for="empresa">Nombre de la Empresa:</label>
            <input type="text" name="empresa[]" required><br><br>
            <label for="cargo">Cargo Desempeñado:</label>
            <input type="text" name="cargo[]" required><br><br>
            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" name="fecha_inicio[]" required><br><br>
            <label for="fecha_fin">Fecha de Fin:</label>
            <input type="date" name="fecha_fin[]"><br><br>
        `;
        container.appendChild(nuevaExperiencia);
    }

    function agregarFormacion() {
        const container = document.getElementById("formacionContainer");
        const nuevaFormacion = document.createElement("div");
        nuevaFormacion.className = "formacion";
        nuevaFormacion.innerHTML = `
            <label for="institucion">Nombre de la Institución:</label>
            <input type="text" name="institucion[]" required><br><br>
            <label for="titulo">Título Obtenido:</label>
            <input type="text" name="titulo[]" required><br><br>
            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" name="fecha_inicio[]" required><br><br>
            <label for="fecha_fin">Fecha de Fin:</label>
            <input type="date" name="fecha_fin[]"><br><br>
        `;
        container.appendChild(nuevaFormacion);
    }

    function agregarIdioma() {
        const container = document.getElementById("idiomasContainer");
        const nuevoIdioma = document.createElement("div");
        nuevoIdioma.className = "idioma";
        nuevoIdioma.innerHTML = `
            <label for="idioma">Idioma:</label>
            <input type="text" name="idioma[]" required><br><br>
            <label for="nivel">Nivel:</label>
            <input type="text" name="nivel[]" required><br><br>
        `;
        container.appendChild(nuevoIdioma);
    }
</script>

<a href="index.php">Volver al menú</a>
</body>
</html>
