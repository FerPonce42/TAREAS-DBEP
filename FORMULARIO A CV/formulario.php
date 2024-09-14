<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Generar CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .form-container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Dos columnas de igual tamaño */
            gap: 20px; /* Espacio entre columnas y filas */
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #002138;
            color: white;
            border: none;
            cursor: pointer;
            grid-column: span 2; /* El botón ocupará ambas columnas */
        }
        .checkbox-group, .radio-group {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Distribuye en columnas */
            gap: 10px;
        }
        .radio-group div, .checkbox-group div {
            display: flex;
            align-items: center;
        }
        .radio-group input, .checkbox-group input {
            margin-right: 10px;
        }
        .full-width {
            grid-column: span 2; /* Ocupa ambas columnas */
        }
        .single-column {
            grid-column: span 1; /* Ocupa una columna */
        }
        .label-with-asterisk {
            display: flex;
            align-items: center;
        }
        .label-with-asterisk::after {
            content: '*';
            color: red;
            margin-left: 5px;
        }
        .compact-select, .compact {
            grid-column: span 1; /* Ocupa una columna */
        }
        textarea {
            height: 100px; /* Ajusta la altura del textarea */
        }
        .photo-upload {
            grid-column: span 2; /* Ocupa ambas columnas */
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .photo-upload input[type="file"] {
            border: 1px solid #ccc;
            padding: 5px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Formulario para Generar CV</h2>
        <form action="cv.php" method="POST" enctype="multipart/form-data">
            <!-- Nombre y Apellidos -->
            <div class="single-column">
                <label for="nombre" class="label-with-asterisk">Nombre y Apellidos:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>

            <!-- Fecha de Nacimiento -->
            <div>
                <label for="fecha_nacimiento" class="label-with-asterisk">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
            </div>

            <!-- Nacionalidad -->
            <div>
                <label for="nacionalidad" class="label-with-asterisk">Nacionalidad:</label>
                <select name="nacionalidad" id="nacionalidad" class="compact-select" required>
                    <option value="Peruano">Peruano</option>
                    <option value="Argentino">Argentino</option>
                    <option value="Chileno">Chileno</option>
                    <option value="Mexicano">Mexicano</option>
                </select>
            </div>

            <!-- Teléfono -->
            <div>
                <label for="telefono" class="label-with-asterisk">Teléfono:</label>
                <input type="tel" name="telefono" id="telefono" required>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="label-with-asterisk">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <!-- Ocupación -->
            <div>
                <label for="ocupacion" class="label-with-asterisk">Ocupación (Puesto Buscado):</label>
                <input type="text" name="ocupacion" id="ocupacion" required>
            </div>

            <!-- Nivel de Inglés -->
            <div>
                <label for="nivel_ingles" class="label-with-asterisk">Nivel de Inglés:</label>
                <div class="radio-group">
                    <div>
                        <label for="nivel_ingles_basico">Básico</label>
                        <input type="radio" name="nivel_ingles" id="nivel_ingles_basico" value="Básico">
                    </div>
                    <div>
                        <label for="nivel_ingles_intermedio">Intermedio</label>
                        <input type="radio" name="nivel_ingles" id="nivel_ingles_intermedio" value="Intermedio">
                    </div>
                    <div>
                        <label for="nivel_ingles_avanzado">Avanzado</label>
                        <input type="radio" name="nivel_ingles" id="nivel_ingles_avanzado" value="Avanzado">
                    </div>
                    <div>
                        <label for="nivel_ingles_fluido">Fluido</label>
                        <input type="radio" name="nivel_ingles" id="nivel_ingles_fluido" value="Fluido">
                    </div>
                </div>
            </div>

            <!-- Lenguajes de Programación -->
            <div class="compact">
                <label for="lenguajes_programacion" class="label-with-asterisk">Lenguajes de Programación:</label>
                <select name="lenguajes_programacion[]" id="lenguajes_programacion" class="compact-select" multiple required>
                    <option value="C++">C++</option>
                    <option value="Python">Python</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Java">Java</option>
                    <option value="HTML">HTML</option>
                </select>
            </div>

            <!-- Habilidades -->
            <div class="compact">
                <label for="habilidades" class="label-with-asterisk">Habilidades:</label>
                <div class="checkbox-group">
                    <div>
                        <label for="habilidad_liderazgo">Liderazgo</label>
                        <input type="checkbox" name="habilidades[]" value="Liderazgo" id="habilidad_liderazgo">
                    </div>
                    <div>
                        <label for="habilidad_trabajo_equipo">Trabajo en equipo</label>
                        <input type="checkbox" name="habilidades[]" value="Trabajo en equipo" id="habilidad_trabajo_equipo">
                    </div>
                    <div>
                        <label for="habilidad_creatividad">Creatividad</label>
                        <input type="checkbox" name="habilidades[]" value="Creatividad" id="habilidad_creatividad">
                    </div>
                    <div>
                        <label for="habilidad_resolucion_problemas">Resolución de problemas</label>
                        <input type="checkbox" name="habilidades[]" value="Resolución de problemas" id="habilidad_resolucion_problemas">
                    </div>
                </div>
            </div>

            <!-- Aptitudes -->
            <div class="compact">
                <label for="aptitudes" class="label-with-asterisk">Aptitudes:</label>
                <input list="aptitudes" name="aptitudes" id="aptitudes" required>
                <datalist id="aptitudes">
                    <option value="Comunicación">
                    <option value="Gestión del Tiempo">
                    <option value="Trabajo en Equipo">
                    <option value="Adaptabilidad">
                    <option value="Aprendizaje y Desarrollo">
                    <option value="Pensamiento Crítico">
                    <option value="Empatía">
                    <option value="Orientación a Resultados">
                    <option value="Habilidades Organizativas">
                    <option value="Capacidad de Negociación">
                    <option value="Autonomía">
                    <option value="Análisis de Datos">
                    <option value="Gestión de Proyectos">
                </datalist>
            </div>

            <!-- Perfil Profesional -->
            <div class="compact">
                <label for="perfil" class="label-with-asterisk">Perfil Profesional:</label>
                <textarea name="perfil" id="perfil" required></textarea>
            </div>

            <!-- Subir Foto -->
            <div class="photo-upload">
                <label for="foto">Subir Foto para Fotocarta:</label>
                <input type="file" name="foto" id="foto" accept="image/*">
            </div>

            <!-- Botón de Enviar -->
            <input type="submit" value="Generar CV">
        </form>
    </div>

</body>
</html>
