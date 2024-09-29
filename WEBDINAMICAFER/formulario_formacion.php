<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Formación</title>
</head>
<body>
    <h2>Agregar Formación</h2>
    <form id="formacionForm" action="guardar_formacion.php" method="POST">
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
        <input type="submit" value="Guardar">
    </form>

    <script>
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
    </script>
</body>
</html>
