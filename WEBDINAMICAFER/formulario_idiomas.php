<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Idiomas</title>
</head>
<body>
    <h2>Agregar Idioma</h2>
    <form id="idiomasForm" action="guardar_idiomas.php" method="POST">
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
</body>
</html>
