<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Aptitudes</title>
</head>
<body>
    <h2>Agregar Aptitud/Habilidad</h2>
    <form id="aptitudesForm" action="guardar_aptitudes.php" method="POST">
        <div id="aptitudesContainer">
            <div class="aptitud">
                <label for="habilidad">Habilidad:</label>
                <input type="text" name="habilidad[]" required><br><br>
            </div>
        </div>
        <button type="button" onclick="agregarAptitud()">Agregar más aptitud</button>
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
    </script>
</body>
</html>
