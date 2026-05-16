<?php
require_once 'db.php';

$mensaje = '';
$error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = trim($_POST['codigo'] ?? '');

    if (empty($codigo)) {
        $mensaje = 'El código es obligatorio.';
        $error = true;
    } else {
        try {
            $stmt = $pdo->prepare("DELETE FROM articulos WHERE codigo = ?");
            $stmt->execute([$codigo]);

            if ($stmt->rowCount() > 0) {
                $mensaje = 'Artículo eliminado exitosamente.';
            } else {
                $mensaje = 'No se encontró ningún artículo con ese código.';
                $error = true;
            }
        } catch (\PDOException $e) {
            $mensaje = 'Error al eliminar: ' . $e->getMessage();
            $error = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja Artículo - Sistema de Biblioteca</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="/static/icon.png" type="image/png">
</head>
<body>
    <div class="container">
        <h1>Baja de Artículo</h1>

        <?php if ($mensaje): ?>
            <div class="alert <?php echo $error ? 'alert-error' : 'alert-success'; ?>">
                <?php echo htmlspecialchars($mensaje); ?>
            </div>
        <?php endif; ?>

        <a href="articulos.php" class="btn-small btn-back">← Volver</a>
    </div>
</body>
</html>