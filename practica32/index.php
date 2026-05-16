<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 32 - Calificación con letra</title>
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
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Práctica 32 - Calificación con letra</h1>

    <form method="POST">
        <div class="form-group">
            <label for="puntuacion">Puntuación (0-100):</label>
            <input type="number" id="puntuacion" name="puntuacion" min="0" max="100" required>
        </div>

        <button type="submit">Convertir</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $puntuacion = intval($_POST['puntuacion'] ?? 0);

        if ($puntuacion >= 90) {
            $letra = "A";
            $color = "#d4edda";
        } elseif ($puntuacion >= 80) {
            $letra = "B";
            $color = "#d4edda";
        } elseif ($puntuacion >= 70) {
            $letra = "C";
            $color = "#fff3cd";
        } elseif ($puntuacion >= 60) {
            $letra = "D";
            $color = "#fff3cd";
        } else {
            $letra = "F";
            $color = "#f8d7da";
        }

        echo '<div class="resultado" style="background:' . $color . ';">Calificación: ' . $letra . '</div>';
    }
    ?>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>