<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Experiencia Laboral</title>
</head>
<body>
    <h2>Agregar Experiencia Laboral</h2>
    <form id="experienciaForm" action="guardar_experiencia.php" method="POST">
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
        <input type="submit" value="Guardar">
    </form>

    <script>
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

        document.getElementById("experienciaForm").addEventListener("submit", function(event) {
            const fechaInicioInputs = document.getElementsByName("fecha_inicio[]");
            const fechaFinInputs = document.getElementsByName("fecha_fin[]");

            for (let i = 0; i < fechaInicioInputs.length; i++) {
                const fechaInicio = new Date(fechaInicioInputs[i].value);
                const fechaFin = new Date(fechaFinInputs[i].value);

                if (fechaFin < fechaInicio) {
                    alert("La fecha de fin no puede ser anterior a la fecha de inicio en el campo " + (i + 1));
                    event.preventDefault();
                    return;
                }
            }
        });
    </script>
</body>
</html>
