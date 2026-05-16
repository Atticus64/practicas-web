<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuarios - Práctica 36</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
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
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { padding: 0.8rem; border: 1px solid #ddd; text-align: left; }
        th { background: #4CAF50; color: white; }
        tr:hover { background: #f5f5f5; }
    </style>
</head>
<body>
    <h1>Consultar Usuarios</h1>

    <form method="GET">
        <div class="form-group">
            <label for="busqueda">Buscar por nombre o email:</label>
            <input type="text" id="busqueda" name="busqueda" placeholder="Escribe para buscar...">
        </div>
        <button type="submit">Buscar</button>
        <button type="button" onclick="window.location.href='consultar.php'">Mostrar todos</button>
    </form>

    <?php
    require_once 'db.php';

    $busqueda = $_GET['busqueda'] ?? '';

    if ($busqueda) {
        $stmt = $pdo->prepare("SELECT id, nombre, apellido, email, created_at FROM usuarios WHERE nombre LIKE ? OR email LIKE ?");
        $stmt->execute(["%$busqueda%", "%$busqueda%"]);
    } else {
        $stmt = $pdo->query("SELECT id, nombre, apellido, email, created_at FROM usuarios ORDER BY nombre");
    }

    $usuarios = $stmt->fetchAll();
    ?>

    <?php if (count($usuarios) > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Fecha registro</th>
            </tr>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['id']; ?></td>
                    <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['apellido']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                    <td><?php echo $usuario['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No se encontraron usuarios.</p>
    <?php endif; ?>

    <p><a href="index.php">← Volver</a></p>
</body>
</html>