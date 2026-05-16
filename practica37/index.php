<?php
session_start();

// Si ya hay sesión activa, redirigir al dashboard
if (isset($_SESSION['usuario_id'])) {
    header('Location: dashboard.php');
    exit;
}

$mensaje = '';
$error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'db.php';

    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $mensaje = 'Todos los campos son obligatorios.';
        $error = true;
    } else {
        $stmt = $pdo->prepare("SELECT id, nombre, email, password FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch();

        if ($usuario && password_verify($password, $usuario['password'])) {
            // Iniciar sesión
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];
            $_SESSION['usuario_email'] = $usuario['email'];

            header('Location: dashboard.php');
            exit;
        } else {
            $mensaje = 'Credenciales incorrectas.';
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
    <title>Login - Práctica 37</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 2rem auto;
            padding: 1rem;
            background: #f5f5f5;
        }
        h1 { color: #333; text-align: center; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; font-weight: bold; }
        input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            background: #4CAF50;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover { background: #45a049; }
        .alert { padding: 1rem; border-radius: 4px; margin-bottom: 1rem; text-align: center; }
        .alert-error { background: #f8d7da; color: #721c24; }
        .links { text-align: center; margin-top: 1rem; }
    </style>
</head>
<body>
    <h1>Iniciar Sesión</h1>

    <?php if ($mensaje): ?>
        <div class="alert <?php echo $error ? 'alert-error' : ''; ?>">
            <?php echo htmlspecialchars($mensaje); ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Iniciar sesión</button>
    </form>

    <div class="links">
        <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </div>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>