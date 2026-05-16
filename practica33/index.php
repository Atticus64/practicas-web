<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 33 - Anagramas</title>
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
            padding: 1rem;
            border-radius: 4px;
            margin-top: 1rem;
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Práctica 33 - Anagramas</h1>
    <p>Determina si dos palabras tienen las mismas letras (sin importar el orden).</p>

    <form method="POST">
        <div class="form-group">
            <label for="palabra1">Primera palabra (minúsculas):</label>
            <input type="text" id="palabra1" name="palabra1" required>
        </div>

        <div class="form-group">
            <label for="palabra2">Segunda palabra (minúsculas):</label>
            <input type="text" id="palabra2" name="palabra2" required>
        </div>

        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $palabra1 = strtolower(trim($_POST['palabra1'] ?? ''));
        $palabra2 = strtolower(trim($_POST['palabra2'] ?? ''));

        // Ordenar letras de cada palabra y comparar
        $letras1 = str_split($palabra1);
        $letras2 = str_split($palabra2);
        sort($letras1);
        sort($letras2);

        $ordenada1 = implode('', $letras1);
        $ordenada2 = implode('', $letras2);

        if ($ordenada1 === $ordenada2 && strlen($palabra1) === strlen($palabra2)) {
            $resultado = "Sí";
            $color = "#d4edda";
        } else {
            $resultado = "No";
            $color = "#f8d7da";
        }

        echo '<div class="resultado" style="background:' . $color . ';">' . $resultado . '</div>';
    }
    ?>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>