<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario - Práctica 36</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 2rem auto;
            padding: 1rem;
            background: #f5f5f5;
        }
        h1 { color: #333; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; font-weight: bold; }
        input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background: #4CAF50;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover { background: #45a049; }
        .alert { padding: 1rem; border-radius: 4px; margin-bottom: 1rem; }
        .alert-error { background: #f8d7da; color: #721c24; }
        .alert-success { background: #d4edda; color: #155724; }
    </style>
</head>
<body>
    <h1>Modificar Usuario</h1>

    <?php
    $mensaje = '';
    $error = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once 'db.php';

        $id = intval($_POST['id'] ?? 0);
        $nombre = trim($_POST['nombre'] ?? '');
        $apellido = trim($_POST['apellido'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if (empty($id) || empty($nombre) || empty($apellido) || empty($email)) {
            $mensaje = 'Todos los campos obligatorios deben ser completados.';
            $error = true;
        } else {
            if (!empty($password)) {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, email = ?, password = ? WHERE id = ?");
                $stmt->execute([$nombre, $apellido, $email, $passwordHash, $id]);
            } else {
                $stmt = $pdo->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, email = ? WHERE id = ?");
                $stmt->execute([$nombre, $apellido, $email, $id]);
            }

            if ($stmt->rowCount() > 0) {
                $mensaje = 'Usuario modificado exitosamente.';
            } else {
                $mensaje = 'No se encontró el usuario o no hubo cambios.';
                $error = true;
            }
        }
    }

    // Si se proporciona ID por GET, mostrar datos actuales
    $usuario = null;
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        require_once 'db.php';
        $stmt = $pdo->prepare("SELECT id, nombre, apellido, email FROM usuarios WHERE id = ?");
        $stmt->execute([intval($_GET['id'])]);
        $usuario = $stmt->fetch();
    }
    ?>

    <?php if ($mensaje): ?>
        <div class="alert <?php echo $error ? 'alert-error' : 'alert-success'; ?>">
            <?php echo htmlspecialchars($mensaje); ?>
        </div>
    <?php endif; ?>

    <?php if ($usuario): ?>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
            <div class="form-group">
                <label for="nombre">Nombre(s):</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($usuario['nombre']); ?>" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido(s):</label>
                <input type="text" id="apellido" name="apellido" value="<?php echo htmlspecialchars($usuario['apellido']); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($usuario['email']); ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Nueva contraseña (dejar vacío para mantener):</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Guardar cambios</button>
        </form>
    <?php else: ?>
        <form method="GET">
            <div class="form-group">
                <label for="id">ID del usuario a modificar:</label>
                <input type="number" id="id" name="id" required>
            </div>
            <button type="submit">Buscar usuario</button>
        </form>
    <?php endif; ?>

    <p><a href="index.php">← Volver</a></p>
</body>
</html>