<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Experiencia Laboral</title>
</head>
<body>
    <h2>Agregar Experiencia Laboral</h2>
    <form action="guardar_experiencia.php" method="POST">
        <label for="empresa">Nombre de la Empresa:</label>
        <input type="text" id="empresa" name="empresa" required><br><br>
        
        <label for="cargo">Cargo Desempeñado:</label>
        <input type="text" id="cargo" name="cargo" required><br><br>
        
        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" required><br><br>
        
        <label for="fecha_fin">Fecha de Fin:</label>
        <input type="date" id="fecha_fin" name="fecha_fin"><br><br>
        
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
