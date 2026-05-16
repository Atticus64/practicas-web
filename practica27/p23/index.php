<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 23 - IMC (PHP)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
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
        .resultado { padding: 1rem; border-radius: 4px; margin-top: 1rem; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { padding: 0.5rem; border: 1px solid #ddd; text-align: left; }
        th { background: #4CAF50; color: white; }
    </style>
</head>
<body>
    <h1>Práctica 23 - Índice de Masa Corporal (PHP)</h1>

    <form method="POST">
        <div class="form-group">
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" step="0.1" min="1" required>
        </div>

        <div class="form-group">
            <label for="altura">Altura (m):</label>
            <input type="number" id="altura" name="altura" step="0.01" min="0.1" required>
        </div>

        <button type="submit">Calcular IMC</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $peso = floatval($_POST['peso'] ?? 0);
        $altura = floatval($_POST['altura'] ?? 0);

        if ($peso <= 0 || $altura <= 0) {
            echo '<div class="resultado" style="background:#f8d7da;color:#721c24;">Por favor, ingresa valores válidos.</div>';
        } else {
            $imc = $peso / ($altura * $altura);
            $imc = round($imc, 1);

            if ($imc < 18.5) {
                $clasificacion = "Bajo peso";
                $color = "#fff3cd";
            } elseif ($imc <= 24.9) {
                $clasificacion = "Normal";
                $color = "#d4edda";
            } elseif ($imc <= 29.9) {
                $clasificacion = "Sobrepeso";
                $color = "#ffeeba";
            } else {
                $clasificacion = "Obesidad";
                $color = "#f8d7da";
            }

            echo '<div class="resultado" style="background:' . $color . ';">';
            echo '<strong>IMC: ' . $imc . '</strong><br>';
            echo 'Clasificación: ' . $clasificacion;
            echo '</div>';
        }
    }
    ?>

    <table>
        <tr><th>IMC</th><th>Clasificación</th></tr>
        <tr><td>Menos de 18.5</td><td>Bajo peso</td></tr>
        <tr><td>18.5 - 24.9</td><td>Normal</td></tr>
        <tr><td>25 - 29.9</td><td>Sobrepeso</td></tr>
        <tr><td>30 o más</td><td>Obesidad</td></tr>
    </table>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>