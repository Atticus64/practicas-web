<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario - Práctica 36</title>
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
            background: #f44336;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover { background: #d32f2f; }
        .alert { padding: 1rem; border-radius: 4px; margin-bottom: 1rem; }
        .alert-error { background: #f8d7da; color: #721c24; }
        .alert-success { background: #d4edda; color: #155724; }
    </style>
</head>
<body>
    <h1>Eliminar Usuario</h1>

    <?php
    $mensaje = '';
    $error = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once 'db.php';

        $id = intval($_POST['id'] ?? 0);

        if (empty($id)) {
            $mensaje = 'El ID es obligatorio.';
            $error = true;
        } else {
            $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
            $stmt->execute([$id]);

            if ($stmt->rowCount() > 0) {
                $mensaje = 'Usuario eliminado exitosamente.';
            } else {
                $mensaje = 'No se encontró ningún usuario con ese ID.';
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

    <form method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario? Esta acción no se puede deshacer.');">
        <div class="form-group">
            <label for="id">ID del usuario a eliminar:</label>
            <input type="number" id="id" name="id" required>
        </div>

        <button type="submit">Eliminar usuario</button>
    </form>

    <p><a href="index.php">← Volver</a></p>
</body>
</html>