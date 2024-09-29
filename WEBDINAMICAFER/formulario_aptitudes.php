<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Aptitudes</title>
</head>
<body>
    <h2>Agregar Aptitud/Habilidad</h2>
    <form action="guardar_aptitudes.php" method="POST">
        <label for="habilidad">Habilidad:</label>
        <input type="text" id="habilidad" name="habilidad" required><br><br>
        
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
