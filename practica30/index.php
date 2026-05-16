<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 30 - Nombre de usuario e iniciales</title>
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
        .resultado {
            background: #e8f5e9;
            padding: 1rem;
            border-radius: 4px;
            margin-top: 1rem;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <h1>Práctica 30 - Nombre de usuario e iniciales</h1>

    <form method="POST">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
        </div>

        <button type="submit">Generar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = trim($_POST['nombre'] ?? '');
        $apellido = trim($_POST['apellido'] ?? '');

        // Nombre de usuario: nombre+apellido en minúsculas, sin espacio
        $usuario = strtolower($nombre . $apellido);
        $usuario = preg_replace('/\s+/', '', $usuario);

        // Iniciales en mayúsculas
        $iniciales = strtoupper(substr($nombre, 0, 1) . substr($apellido, 0, 1));

        echo '<div class="resultado">';
        echo 'Nombre de usuario: <strong>' . htmlspecialchars($usuario) . '</strong><br>';
        echo 'Iniciales: <strong>' . htmlspecialchars($iniciales) . '</strong>';
        echo '</div>';
    }
    ?>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>