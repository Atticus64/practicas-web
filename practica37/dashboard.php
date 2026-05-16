<?php
session_start();

// Verificar si hay sesión activa
if (!isset($_SESSION['usuario_id'])) {
    header('Location: index.php');
    exit;
}

$nombre = $_SESSION['usuario_nombre'];
$email = $_SESSION['usuario_email'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Práctica 37</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 2rem auto;
            padding: 1rem;
            background: #f5f5f5;
        }
        h1 { color: #333; }
        .bienvenida {
            background: #d4edda;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        .bienvenida h2 { color: #155724; margin: 0 0 0.5rem 0; }
        .info {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        .info p { margin: 0.5rem 0; }
        .btn {
            display: inline-block;
            background: #f44336;
            color: white;
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            border-radius: 4px;
        }
        .btn:hover { background: #d32f2f; }
    </style>
</head>
<body>
    <h1>Dashboard</h1>

    <div class="bienvenida">
        <h2>¡Bienvenido, <?php echo htmlspecialchars($nombre); ?>!</h2>
        <p>Has iniciado sesión correctamente.</p>
    </div>

    <div class="info">
        <h3>Información de tu cuenta:</h3>
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>ID de usuario:</strong> <?php echo $_SESSION['usuario_id']; ?></p>
    </div>

    <p>Esta es una sección exclusiva para usuarios autenticados.</p>

    <a href="logout.php" class="btn">Cerrar sesión</a>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>