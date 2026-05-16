<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos - Sistema de Biblioteca</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="/static/icon.png" type="image/png">
</head>
<body>
    <div class="container">
        <h1>Gestión de Artículos para Préstamo</h1>

        <div class="back-link" style="margin-bottom: 1.5rem;">
            <a href="index.php">← Volver al menú</a>
        </div>

        <section>
            <h2>Alta de Artículo</h2>
            <form action="alta_articulo.php" method="POST">
                <label for="nombre_alta">Nombre del artículo</label>
                <input type="text" id="nombre_alta" name="nombre" required>

                <label for="codigo_alta">Código / Número de inventario</label>
                <input type="text" id="codigo_alta" name="codigo" required>

                <label for="categoria_alta">Categoría</label>
                <select id="categoria_alta" name="categoria">
                    <option value="proyector">Proyector</option>
                    <option value="geodesia">Geodesia</option>
                    <option value="computo">Cómputo</option>
                    <option value="electronica">Electrónica</option>
                    <option value="laboratorio">Laboratorio</option>
                    <option value="otro">Otro</option>
                </select>

                <label for="descripcion_alta">Descripción</label>
                <textarea id="descripcion_alta" name="descripcion" rows="3"></textarea>

                <label for="cantidad_alta">Cantidad disponible</label>
                <input type="number" id="cantidad_alta" name="cantidad" min="1" value="1" required>

                <label for="estado_alta">Estado</label>
                <select id="estado_alta" name="estado">
                    <option value="bueno">Bueno</option>
                    <option value="regular">Regular</option>
                    <option value="malo">Malo</option>
                </select>

                <label for="ubicacion_alta">Ubicación</label>
                <input type="text" id="ubicacion_alta" name="ubicacion">

                <button type="submit">Registrar Artículo</button>
                <button type="reset">Limpiar</button>
            </form>
        </section>

        <hr>

        <section>
            <h2>Actualizar Artículo</h2>
            <form action="actualizar_articulo.php" method="POST">
                <label for="codigo_upd">Código / Número de inventario a actualizar</label>
                <input type="text" id="codigo_upd" name="codigo" required>

                <label for="nombre_upd">Nuevo nombre del artículo</label>
                <input type="text" id="nombre_upd" name="nombre">

                <label for="categoria_upd">Nueva categoría</label>
                <select id="categoria_upd" name="categoria">
                    <option value="">-- Sin cambio --</option>
                    <option value="proyector">Proyector</option>
                    <option value="geodesia">Geodesia</option>
                    <option value="computo">Cómputo</option>
                    <option value="electronica">Electrónica</option>
                    <option value="laboratorio">Laboratorio</option>
                    <option value="otro">Otro</option>
                </select>

                <label for="descripcion_upd">Nueva descripción</label>
                <textarea id="descripcion_upd" name="descripcion" rows="3"></textarea>

                <label for="cantidad_upd">Nueva cantidad disponible</label>
                <input type="number" id="cantidad_upd" name="cantidad" min="0">

                <label for="estado_upd">Nuevo estado</label>
                <select id="estado_upd" name="estado">
                    <option value="">-- Sin cambio --</option>
                    <option value="bueno">Bueno</option>
                    <option value="regular">Regular</option>
                    <option value="malo">Malo</option>
                </select>

                <label for="ubicacion_upd">Nueva ubicación</label>
                <input type="text" id="ubicacion_upd" name="ubicacion">

                <button type="submit">Actualizar Artículo</button>
                <button type="reset">Limpiar</button>
            </form>
        </section>

        <hr>

        <section>
            <h2>Baja de Artículo</h2>
            <form action="baja_articulo.php" method="POST">
                <label for="codigo_baja">Código / Número de inventario a dar de baja</label>
                <input type="text" id="codigo_baja" name="codigo" required>

                <label for="motivo_baja">Motivo de baja</label>
                <select id="motivo_baja" name="motivo">
                    <option value="extraviado">Extraviado</option>
                    <option value="danado">Dañado / Inservible</option>
                    <option value="obsoleto">Obsoleto</option>
                    <option value="otro">Otro</option>
                </select>

                <label for="observaciones_baja">Observaciones</label>
                <textarea id="observaciones_baja" name="observaciones" rows="3"></textarea>

                <button type="submit">Dar de Baja</button>
                <button type="reset">Limpiar</button>
            </form>
        </section>
    </div>
</body>
</html>