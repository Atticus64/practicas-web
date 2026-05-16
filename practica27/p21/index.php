<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 21 - Operaciones aritméticas (PHP)</title>
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
            margin-right: 0.5rem;
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
    <h1>Práctica 21 - Operaciones aritméticas (PHP)</h1>

    <form method="POST">
        <div class="form-group">
            <label for="num1">Primer número:</label>
            <input type="number" id="num1" name="num1" step="any" required>
        </div>

        <div class="form-group">
            <label for="num2">Segundo número:</label>
            <input type="number" id="num2" name="num2" step="any" required>
        </div>

        <button type="submit" name="operacion" value="suma">Suma</button>
        <button type="submit" name="operacion" value="resta">Resta</button>
        <button type="submit" name="operacion" value="division">División</button>
        <button type="submit" name="operacion" value="exponenciacion">Exponenciación</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = floatval($_POST['num1'] ?? 0);
        $num2 = floatval($_POST['num2'] ?? 0);
        $operacion = $_POST['operacion'] ?? '';
        $resultado = '';
        $operador = '';

        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                $operador = '+';
                $nombreOp = 'Suma';
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                $operador = '-';
                $nombreOp = 'Resta';
                break;
            case 'division':
                if ($num2 == 0) {
                    echo '<div class="resultado" style="background:#f8d7da;color:#721c24;">No se puede dividir entre cero.</div>';
                } else {
                    $resultado = $num1 / $num2;
                    $operador = '/';
                    $nombreOp = 'División';
                }
                break;
            case 'exponenciacion':
                $resultado = pow($num1, $num2);
                $operador = '**';
                $nombreOp = 'Exponenciación';
                break;
        }

        if (isset($resultado)) {
            echo '<div class="resultado"><strong>' . $nombreOp . ':</strong> ' . $num1 . ' ' . $operador . ' ' . $num2 . ' = ' . $resultado . '</div>';
        }
    }
    ?>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>