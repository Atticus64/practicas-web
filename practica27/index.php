<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 27 - Menú de prácticas en PHP</title>
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
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .menu-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .menu-item h3 {
            color: #4CAF50;
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>Práctica 27 - Menú de prácticas 21-26 en PHP</h1>
    <p>Equivalentes en PHP de las prácticas realizadas en JavaScript:</p>

    <div class="menu">
        <a href="p21/index.php" class="menu-item">
            <h3>Práctica 21</h3>
            <p>Operaciones aritméticas con formulario</p>
        </a>

        <a href="p22/index.php" class="menu-item">
            <h3>Práctica 22</h3>
            <p>Fórmula general (ecuación cuadrática)</p>
        </a>

        <a href="p23/index.php" class="menu-item">
            <h3>Práctica 23</h3>
            <p>Índice de Masa Corporal (IMC)</p>
        </a>

        <a href="p24/index.php" class="menu-item">
            <h3>Práctica 24</h3>
            <p>Fecha actual con switch</p>
        </a>

        <a href="p25/index.php" class="menu-item">
            <h3>Práctica 25</h3>
            <p>Tablas de multiplicar del 1 al 10</p>
        </a>

        <a href="p26/index.php" class="menu-item">
            <h3>Práctica 26</h3>
            <p>Tablas de multiplicar hasta N</p>
        </a>
    </div>

    <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>