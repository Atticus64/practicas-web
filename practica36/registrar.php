<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario - Práctica 36</title>
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
    <h1>Registrar Usuario</h1>

    <?php
    $mensaje = '';
    $error = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once 'db.php';

        $nombre = trim($_POST['nombre'] ?? '');
        $apellido = trim($_POST['apellido'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if (empty($nombre) || empty($apellido) || empty($email) || empty($password)) {
            $mensaje = 'Todos los campos son obligatorios.';
            $error = true;
        } else {
            // Hash de la contraseña
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            try {
                $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, apellido, email, password) VALUES (?, ?, ?, ?)");
                $stmt->execute([$nombre, $apellido, $email, $passwordHash]);
                $mensaje = 'Usuario registrado exitosamente.';
            } catch (\PDOException $e) {
                if ($e->getCode() == 23000) {
                    $mensaje = 'Error: El correo ya está registrado.';
                } else {
                    $mensaje = 'Error al registrar: ' . $e->getMessage();
                }
                $error = true;
            }
        }
    }
    ?>

    <?php if ($mensaje): ?>
        <div class="alert <?php echo $error ? 'alert-error' : 'alert-success'; ?>">
            <?php echo htmlspecialchars($mensaje); ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <div class="form-group">
            <label for="nombre">Nombre(s):</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido(s):</label>
            <input type="text" id="apellido" name="apellido" required>
        </div>

        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Registrar</button>
    </form>

    <p><a href="index.php">← Volver</a></p>
</body>
</html>