<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Idiomas</title>
</head>
<body>
    <h2>Agregar Idioma</h2>
    <form action="guardar_idiomas.php" method="POST">
        <label for="idioma">Idioma:</label>
        <input type="text" id="idioma" name="idioma" required><br><br>
        
        <label for="nivel">Nivel:</label>
        <input type="text" id="nivel" name="nivel" required><br><br>
        
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
