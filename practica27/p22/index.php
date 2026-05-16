<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 22 - Fórmula general (PHP)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 2rem auto;
            padding: 1rem;
            background: #f5f5f5;
        }
        h1 { color: #333; }
        .formula {
            background: #fff3cd;
            padding: 1rem;
            border-radius: 4px;
            text-align: center;
            margin: 1rem 0;
        }
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
        }
    </style>
</head>
<body>
    <h1>Práctica 22 - Fórmula General (PHP)</h1>

    <div class="formula">x = (-b ± √(b² - 4ac)) / 2a</div>

    <form method="POST">
        <div class="form-group">
            <label for="a">Valor de a:</label>
            <input type="number" id="a" name="a" step="any" required>
        </div>

        <div class="form-group">
            <label for="b">Valor de b:</label>
            <input type="number" id="b" name="b" step="any" required>
        </div>

        <div class="form-group">
            <label for="c">Valor de c:</label>
            <input type="number" id="c" name="c" step="any" required>
        </div>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = floatval($_POST['a'] ?? 0);
        $b = floatval($_POST['b'] ?? 0);
        $c = floatval($_POST['c'] ?? 0);

        if ($a == 0) {
            echo '<div class="resultado" style="background:#f8d7da;color:#721c24;">El valor de "a" no puede ser cero.</div>';
        } else {
            $discriminante = ($b * $b) - (4 * $a * $c);

            if ($discriminante < 0) {
                echo '<div class="resultado" style="background:#f8d7da;color:#721c24;">El discriminante es negativo. No hay soluciones reales.</div>';
            } elseif ($discriminante == 0) {
                $x = -$b / (2 * $a);
                echo '<div class="resultado" style="background:#d4edda;color:#155724;">Una solución real: x = ' . number_format($x, 4) . '</div>';
            } else {
                $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
                $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
                echo '<div class="resultado" style="background:#d4edda;color:#155724;">Dos soluciones reales:<br><strong>x1 = ' . number_format($x1, 4) . '</strong><br><strong>x2 = ' . number_format($x2, 4) . '</strong></div>';
            }
        }
    }
    ?>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>