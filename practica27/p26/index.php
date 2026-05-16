<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 26 - Tablas hasta N (PHP)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 2rem auto;
            padding: 1rem;
            background: #f5f5f5;
        }
        h1 { color: #333; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; font-weight: bold; }
        input {
            width: 200px;
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
        .tablas-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1rem;
        }
        .tabla {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            min-width: 150px;
        }
        .tabla h3 {
            color: #4CAF50;
            margin: 0 0 0.5rem 0;
            border-bottom: 2px solid #4CAF50;
        }
        .tabla p { margin: 0.2rem 0; font-size: 0.9rem; }
        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 1rem;
            border-radius: 4px;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <h1>Práctica 26 - Tablas de multiplicar hasta N (PHP)</h1>

    <form method="POST">
        <div class="form-group">
            <label for="numero">Ingresa un número positivo:</label>
            <input type="number" id="numero" name="numero" min="1" required>
        </div>

        <button type="submit">Generar tablas de multiplicar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = intval($_POST['numero'] ?? 0);

        if ($n < 1) {
            echo '<div class="error">Por favor, ingresa un número positivo mayor a 0.</div>';
        } else {
            echo '<div class="tablas-container">';

            for ($i = 1; $i <= $n; $i++) {
                echo '<div class="tabla">';
                echo '<h3>Tabla del ' . $i . '</h3>';

                for ($j = 1; $j <= 10; $j++) {
                    echo '<p>' . $i . ' × ' . $j . ' = ' . ($i * $j) . '</p>';
                }

                echo '</div>';
            }

            echo '</div>';
        }
    }
    ?>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>