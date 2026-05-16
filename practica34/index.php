<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 34 - Tipo de cambio</title>
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
    <h1>Práctica 34 - Tipo de cambio</h1>

    <form method="POST">
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" step="any" required>
        </div>

        <div class="form-group">
            <label for="tasa">Tasa de cambio:</label>
            <input type="number" id="tasa" name="tasa" step="any" required>
        </div>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cantidad = floatval($_POST['cantidad'] ?? 0);
        $tasa = floatval($_POST['tasa'] ?? 0);
        $resultado = $cantidad * $tasa;

        echo '<div class="resultado">El resultado es ' . number_format($resultado, 2) . '</div>';
    }
    ?>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>