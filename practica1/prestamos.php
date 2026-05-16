<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamos - Sistema de Biblioteca</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="/static/icon.png" type="image/png">
</head>
<body>
    <div class="container">
        <h1>Bitácora de Préstamo de Equipos</h1>

        <div class="back-link" style="margin-bottom: 1.5rem;">
            <a href="index.php">← Volver al menú</a>
        </div>

        <section>
            <h2>Alta de Préstamo</h2>
            <form action="alta_prestamo.php" method="POST">
                <label for="nombre_alta">Nombre</label>
                <input type="text" id="nombre_alta" name="nombre" required>

                <label for="carrera_alta">Carrera</label>
                <select id="carrera_alta" name="carrera">
                    <option value="geodesia">Geodesia</option>
                    <option value="sistemas">Sistemas</option>
                    <option value="civil">Civil</option>
                    <option value="electronica">Electrónica</option>
                </select>

                <label>Seleccione su rol</label>
                <div style="margin-bottom: 1rem;">
                    <label style="display: inline;">
                        <input type="radio" name="rol" value="maestro"> Maestro
                    </label>
                    <label style="display: inline; margin-left: 1rem;">
                        <input type="radio" name="rol" value="alumno" checked> Alumno
                    </label>
                </div>

                <label for="prestamo_alta">Artículo</label>
                <input type="text" id="prestamo_alta" name="prestamo" required>

                <label for="fecha_prestamo_alta">Fecha de Préstamo</label>
                <input type="datetime-local" id="fecha_prestamo_alta" name="fecha_prestamo" required>

                <label for="fecha_entrega_alta">Fecha de Entrega</label>
                <input type="datetime-local" id="fecha_entrega_alta" name="fecha_entrega" required>

                <button type="submit">Registrar Préstamo</button>
                <button type="reset">Limpiar</button>
            </form>
        </section>

        <hr>

        <section>
            <h2>Actualizar Préstamo</h2>
            <form action="actualizar_prestamo.php" method="POST">
                <label for="id_upd">ID del Préstamo a actualizar</label>
                <input type="text" id="id_upd" name="id_prestamo" required>

                <label for="nombre_upd">Nombre</label>
                <input type="text" id="nombre_upd" name="nombre">

                <label for="carrera_upd">Carrera</label>
                <select id="carrera_upd" name="carrera">
                    <option value="">-- Sin cambio --</option>
                    <option value="geodesia">Geodesia</option>
                    <option value="sistemas">Sistemas</option>
                    <option value="civil">Civil</option>
                    <option value="electronica">Electrónica</option>
                </select>

                <label>Seleccione su rol</label>
                <div style="margin-bottom: 1rem;">
                    <label style="display: inline;">
                        <input type="radio" name="rol" value="maestro"> Maestro
                    </label>
                    <label style="display: inline; margin-left: 1rem;">
                        <input type="radio" name="rol" value="alumno"> Alumno
                    </label>
                </div>

                <label for="prestamo_upd">Artículo</label>
                <input type="text" id="prestamo_upd" name="prestamo">

                <label for="fecha_prestamo_upd">Fecha de Préstamo</label>
                <input type="datetime-local" id="fecha_prestamo_upd" name="fecha_prestamo">

                <label for="fecha_entrega_upd">Fecha de Entrega</label>
                <input type="datetime-local" id="fecha_entrega_upd" name="fecha_entrega">

                <button type="submit">Actualizar Préstamo</button>
                <button type="reset">Limpiar</button>
            </form>
        </section>

        <hr>

        <section>
            <h2>Baja de Préstamo</h2>
            <form action="baja_prestamo.php" method="POST">
                <label for="id_baja">ID del Préstamo a dar de baja</label>
                <input type="text" id="id_baja" name="id_prestamo" required>

                <label for="motivo_baja">Motivo de baja</label>
                <textarea id="motivo_baja" name="motivo" rows="3"></textarea>

                <button type="submit">Dar de Baja</button>
                <button type="reset">Limpiar</button>
            </form>
        </section>
    </div>
</body>
</html>