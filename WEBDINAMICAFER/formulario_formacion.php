<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Formación</title>
</head>
<body>
    <h2>Agregar Formación</h2>
    <form action="guardar_formacion.php" method="POST">
        <label for="institucion">Nombre de la Institución:</label>
        <input type="text" id="institucion" name="institucion" required><br><br>
        
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>
        
        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" required><br><br>
        
        <label for="fecha_fin">Fecha de Fin:</label>
        <input type="date" id="fecha_fin" name="fecha_fin"><br><br>
        
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
