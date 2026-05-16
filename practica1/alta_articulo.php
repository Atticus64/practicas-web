<?php
require_once 'db.php';

$mensaje = '';
$error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $codigo = trim($_POST['codigo'] ?? '');
    $categoria = $_POST['categoria'] ?? '';
    $descripcion = trim($_POST['descripcion'] ?? '');
    $cantidad = intval($_POST['cantidad'] ?? 1);
    $estado = $_POST['estado'] ?? 'bueno';
    $ubicacion = trim($_POST['ubicacion'] ?? '');

    if (empty($nombre) || empty($codigo)) {
        $mensaje = 'El nombre y código son obligatorios.';
        $error = true;
    } else {
        try {
            $stmt = $pdo->prepare("INSERT INTO articulos (nombre, codigo, categoria, descripcion, cantidad, estado, ubicacion) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$nombre, $codigo, $categoria, $descripcion, $cantidad, $estado, $ubicacion]);
            $mensaje = 'Artículo registrado exitosamente.';
        } catch (\PDOException $e) {
            if ($e->getCode() == 23000) {
                $mensaje = 'Error: El código ya existe en la base de datos.';
            } else {
                $mensaje = 'Error al registrar: ' . $e->getMessage();
            }
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
    <title>Alta Artículo - Sistema de Biblioteca</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="/static/icon.png" type="image/png">
</head>
<body>
    <div class="container">
        <h1>Alta de Artículo</h1>

        <?php if ($mensaje): ?>
            <div class="alert <?php echo $error ? 'alert-error' : 'alert-success'; ?>">
                <?php echo htmlspecialchars($mensaje); ?>
            </div>
        <?php endif; ?>

        <a href="articulos.php" class="btn-small btn-back">← Volver</a>
    </div>
</body>
</html>