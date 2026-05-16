<?php
require_once 'db.php';

$mensaje = '';
$error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $apellido = trim($_POST['apellido'] ?? '');
    $matricula = trim($_POST['matricula'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $carrera = trim($_POST['carrera'] ?? '');

    if (empty($nombre) || empty($apellido) || empty($matricula) || empty($email)) {
        $mensaje = 'Todos los campos obligatorios deben ser completados.';
        $error = true;
    } else {
        try {
            $stmt = $pdo->prepare("INSERT INTO alumnos (nombre, apellido, matricula, email, carrera) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$nombre, $apellido, $matricula, $email, $carrera]);
            $mensaje = 'Alumno registrado exitosamente.';
        } catch (\PDOException $e) {
            if ($e->getCode() == 23000) {
                $mensaje = 'Error: La matrícula ya existe en la base de datos.';
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
    <title>Alta Alumno - Sistema de Biblioteca</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="/static/icon.png" type="image/png">
</head>
<body>
    <div class="container">
        <h1>Alta de Alumno</h1>

        <?php if ($mensaje): ?>
            <div class="alert <?php echo $error ? 'alert-error' : 'alert-success'; ?>">
                <?php echo htmlspecialchars($mensaje); ?>
            </div>
        <?php endif; ?>

        <a href="alumnos.php" class="btn-small btn-back">← Volver</a>
    </div>
</body>
</html>