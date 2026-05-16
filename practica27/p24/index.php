<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 24 - Fecha actual (PHP)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 2rem auto;
            padding: 1rem;
            background: #f5f5f5;
        }
        h1 { color: #333; }
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
            padding: 1.5rem;
            border-radius: 8px;
            margin-top: 1rem;
            font-size: 1.3rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Práctica 24 - Fecha actual con switch (PHP)</h1>

    <form method="POST">
        <button type="submit">Mostrar fecha actual</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $diaNumero = date('w');
        $mesNumero = date('n') - 1;
        $diaMes = date('j');
        $año = date('Y');

        switch ($diaNumero) {
            case 0: $nombreDia = "domingo"; break;
            case 1: $nombreDia = "lunes"; break;
            case 2: $nombreDia = "martes"; break;
            case 3: $nombreDia = "miércoles"; break;
            case 4: $nombreDia = "jueves"; break;
            case 5: $nombreDia = "viernes"; break;
            case 6: $nombreDia = "sábado"; break;
        }

        switch ($mesNumero) {
            case 0: $nombreMes = "Enero"; break;
            case 1: $nombreMes = "Febrero"; break;
            case 2: $nombreMes = "Marzo"; break;
            case 3: $nombreMes = "Abril"; break;
            case 4: $nombreMes = "Mayo"; break;
            case 5: $nombreMes = "Junio"; break;
            case 6: $nombreMes = "Julio"; break;
            case 7: $nombreMes = "Agosto"; break;
            case 8: $nombreMes = "Septiembre"; break;
            case 9: $nombreMes = "Octubre"; break;
            case 10: $nombreMes = "Noviembre"; break;
            case 11: $nombreMes = "Diciembre"; break;
        }

        $fechaFormateada = "Hoy es " . $nombreDia . " " . $diaMes . " de " . $nombreMes . " del año " . $año;

        echo '<div class="resultado">' . $fechaFormateada . '</div>';
    }
    ?>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>