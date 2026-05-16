<?php
require_once 'db.php';

$mensaje = '';
$error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = trim($_POST['codigo'] ?? '');
    $nombre = trim($_POST['nombre'] ?? '');
    $categoria = $_POST['categoria'] ?? '';
    $descripcion = trim($_POST['descripcion'] ?? '');
    $cantidad = $_POST['cantidad'] ?? '';
    $estado = $_POST['estado'] ?? '';
    $ubicacion = trim($_POST['ubicacion'] ?? '');

    if (empty($codigo)) {
        $mensaje = 'El código es obligatorio.';
        $error = true;
    } else {
        $campos = [];
        $valores = [];

        if (!empty($nombre)) { $campos[] = "nombre = ?"; $valores[] = $nombre; }
        if (!empty($categoria)) { $campos[] = "categoria = ?"; $valores[] = $categoria; }
        if (!empty($descripcion)) { $campos[] = "descripcion = ?"; $valores[] = $descripcion; }
        if ($cantidad !== '') { $campos[] = "cantidad = ?"; $valores[] = intval($cantidad); }
        if (!empty($estado)) { $campos[] = "estado = ?"; $valores[] = $estado; }
        if (!empty($ubicacion)) { $campos[] = "ubicacion = ?"; $valores[] = $ubicacion; }

        if (empty($campos)) {
            $mensaje = 'No hay campos para actualizar.';
            $error = true;
        } else {
            $valores[] = $codigo;
            $sql = "UPDATE articulos SET " . implode(', ', $campos) . " WHERE codigo = ?";

            try {
                $stmt = $pdo->prepare($sql);
                $stmt->execute($valores);

                if ($stmt->rowCount() > 0) {
                    $mensaje = 'Artículo actualizado exitosamente.';
                } else {
                    $mensaje = 'No se encontró ningún artículo con ese código.';
                    $error = true;
                }
            } catch (\PDOException $e) {
                $mensaje = 'Error al actualizar: ' . $e->getMessage();
                $error = true;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Artículo - Sistema de Biblioteca</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="/static/icon.png" type="image/png">
</head>
<body>
    <div class="container">
        <h1>Actualizar Artículo</h1>

        <?php if ($mensaje): ?>
            <div class="alert <?php echo $error ? 'alert-error' : 'alert-success'; ?>">
                <?php echo htmlspecialchars($mensaje); ?>
            </div>
        <?php endif; ?>

        <a href="articulos.php" class="btn-small btn-back">← Volver</a>
    </div>
</body>
</html>