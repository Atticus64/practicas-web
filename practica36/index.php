<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 36 - CRUD de usuarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            background: #f5f5f5;
        }
        h1 { color: #333; }
        .menu {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-top: 1rem;
        }
        .menu-item {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-decoration: none;
            color: #333;
            transition: transform 0.2s;
        }
        .menu-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .menu-item h3 { color: #4CAF50; margin: 0; }
        .alert {
            padding: 1rem;
            border-radius: 4px;
            margin-bottom: 1rem;
        }
        .alert-error { background: #f8d7da; color: #721c24; }
        .alert-success { background: #d4edda; color: #155724; }
    </style>
</head>
<body>
    <h1>Práctica 36 - CRUD de Usuarios</h1>

    <?php
    if (isset($_GET['mensaje'])) {
        $mensaje = htmlspecialchars($_GET['mensaje']);
        $tipo = isset($_GET['error']) ? 'alert-error' : 'alert-success';
        echo '<div class="alert ' . $tipo . '">' . $mensaje . '</div>';
    }
    ?>

    <div class="menu">
        <a href="registrar.php" class="menu-item">
            <h3>Registrar</h3>
            <p>Crear nuevo usuario</p>
        </a>

        <a href="consultar.php" class="menu-item">
            <h3>Consultar</h3>
            <p>Buscar y listar usuarios</p>
        </a>

        <a href="modificar.php" class="menu-item">
            <h3>Modificar</h3>
            <p>Actualizar datos de usuario</p>
        </a>

        <a href="eliminar.php" class="menu-item">
            <h3>Eliminar</h3>
            <p>Borrar usuario</p>
        </a>
    </div>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>