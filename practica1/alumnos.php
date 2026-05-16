<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos - Sistema de Biblioteca</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="/static/icon.png" type="image/png">
</head>
<body>
    <div class="container">
        <h1>Gestión de Alumnos</h1>

        <div class="back-link" style="margin-bottom: 1.5rem;">
            <a href="index.php">← Volver al menú</a>
        </div>

        <section>
            <h2>Alta de Alumno</h2>
            <form action="alta_alumno.php" method="POST">
                <label for="nombre_alta">Nombre:</label>
                <input type="text" id="nombre_alta" name="nombre" required>

                <label for="apellido_alta">Apellido:</label>
                <input type="text" id="apellido_alta" name="apellido" required>

                <label for="matricula_alta">Matrícula:</label>
                <input type="text" id="matricula_alta" name="matricula" required>

                <label for="email_alta">Correo electrónico:</label>
                <input type="email" id="email_alta" name="email" required>

                <label for="carrera_alta">Carrera:</label>
                <input type="text" id="carrera_alta" name="carrera">

                <button type="submit">Registrar Alumno</button>
                <button type="reset">Limpiar</button>
            </form>
        </section>

        <hr>

        <section>
            <h2>Actualizar Alumno</h2>
            <form action="actualizar_alumno.php" method="POST">
                <label for="matricula_upd">Matrícula del alumno a actualizar:</label>
                <input type="text" id="matricula_upd" name="matricula" required>

                <label for="nombre_upd">Nuevo nombre:</label>
                <input type="text" id="nombre_upd" name="nombre">

                <label for="apellido_upd">Nuevo apellido:</label>
                <input type="text" id="apellido_upd" name="apellido">

                <label for="email_upd">Nuevo correo electrónico:</label>
                <input type="email" id="email_upd" name="email">

                <label for="carrera_upd">Nueva carrera:</label>
                <input type="text" id="carrera_upd" name="carrera">

                <button type="submit">Actualizar Alumno</button>
                <button type="reset">Limpiar</button>
            </form>
        </section>

        <hr>

        <section>
            <h2>Baja de Alumno</h2>
            <form action="baja_alumno.php" method="POST">
                <label for="matricula_baja">Matrícula del alumno a dar de baja:</label>
                <input type="text" id="matricula_baja" name="matricula" required>

                <label for="motivo_baja">Motivo de baja:</label>
                <textarea id="motivo_baja" name="motivo" rows="3"></textarea>

                <button type="submit">Dar de Baja</button>
                <button type="reset">Limpiar</button>
            </form>
        </section>
    </div>
</body>
</html>