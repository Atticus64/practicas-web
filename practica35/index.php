<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 35 - Convertidor de segundos</title>
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
    <h1>Práctica 35 - Convertidor de segundos</h1>

    <form method="POST">
        <div class="form-group">
            <label for="segundos">Total de segundos:</label>
            <input type="number" id="segundos" name="segundos" min="0" required>
        </div>

        <button type="submit">Convertir</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $totalSegundos = intval($_POST['segundos'] ?? 0);

        $horas = intdiv($totalSegundos, 3600);
        $resto = $totalSegundos % 3600;
        $minutos = intdiv($resto, 60);
        $segundos = $resto % 60;

        echo '<div class="resultado">' . $totalSegundos . ' segundos corresponden a ' . $horas . 'h, ' . $minutos . 'm y ' . $segundos . 's</div>';
    }
    ?>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>