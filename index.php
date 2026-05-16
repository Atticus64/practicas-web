<?php
$host = $_SERVER['HTTP_HOST'];
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
$baseUrl = $protocol . $host;

$prácticas = [
    'practica1' => [
        'nombre' => 'Sistema de Biblioteca',
        'descripción' => 'Gestión de alumnos, artículos y préstamos (CRUD)',
        'tipo' => 'PHP + MySQL'
    ],
    'practica19' => [
        'nombre' => 'Salidas de texto en JavaScript',
        'descripción' => 'Diferentes formas de mostrar texto en JS',
        'tipo' => 'JavaScript'
    ],
    'practica20' => [
        'nombre' => 'Variables y operaciones aritméticas',
        'descripción' => 'Suma, resta, división y exponenciación',
        'tipo' => 'JavaScript'
    ],
    'practica21' => [
        'nombre' => 'Operaciones aritméticas con formulario',
        'descripción' => 'Calculadora con formularios y botones',
        'tipo' => 'JavaScript'
    ],
    'practica22' => [
        'nombre' => 'Fórmula general (ecuación cuadrática)',
        'descripción' => 'Calcula x1 y x2 con la fórmula de Bhaskara',
        'tipo' => 'JavaScript'
    ],
    'practica23' => [
        'nombre' => 'Índice de Masa Corporal (IMC)',
        'descripción' => 'Calcula IMC y determina grado (bajo peso, normal, sobrepeso, obesidad)',
        'tipo' => 'JavaScript'
    ],
    'practica24' => [
        'nombre' => 'Fecha actual con switch',
        'descripción' => 'Muestra la fecha actual usando switch para día y mes',
        'tipo' => 'JavaScript'
    ],
    'practica25' => [
        'nombre' => 'Tablas de multiplicar del 1 al 10',
        'descripción' => 'Genera todas las tablas usando ciclos',
        'tipo' => 'JavaScript'
    ],
    'practica26' => [
        'nombre' => 'Tablas de multiplicar hasta N',
        'descripción' => 'Genera tablas del 1 hasta el número indicado',
        'tipo' => 'JavaScript'
    ],
    'practica27' => [
        'nombre' => 'Menú de prácticas 21-26 en PHP',
        'descripción' => 'Equivalentes en PHP de las prácticas 21-26',
        'tipo' => 'PHP'
    ],
    'practica28' => [
        'nombre' => 'Convertidor Celsius a Fahrenheit',
        'descripción' => 'Convierte temperatura de °C a °F',
        'tipo' => 'PHP'
    ],
    'practica29' => [
        'nombre' => 'Par o Impar',
        'descripción' => 'Determina si un número es par o impar',
        'tipo' => 'PHP'
    ],
    'practica30' => [
        'nombre' => 'Nombre de usuario e iniciales',
        'descripción' => 'Genera usuario e iniciales a partir de nombre y apellido',
        'tipo' => 'PHP'
    ],
    'practica31' => [
        'nombre' => '¿Puede votar?',
        'descripción' => 'Determina si una persona puede votar según su edad',
        'tipo' => 'PHP'
    ],
    'practica32' => [
        'nombre' => 'Calificación con letra',
        'descripción' => 'Convierte puntuación numérica a letra (A-F)',
        'tipo' => 'PHP'
    ],
    'practica33' => [
        'nombre' => 'Anagramas',
        'descripción' => 'Determina si dos palabras son anagramas',
        'tipo' => 'PHP'
    ],
    'practica34' => [
        'nombre' => 'Tipo de cambio',
        'descripción' => 'Convierte cantidad usando tasa de cambio',
        'tipo' => 'PHP'
    ],
    'practica35' => [
        'nombre' => 'Convertidor de segundos',
        'descripción' => 'Convierte segundos a horas, minutos y segundos',
        'tipo' => 'PHP'
    ],
    'practica36' => [
        'nombre' => 'CRUD de usuarios con base de datos',
        'descripción' => 'Registrar, consultar, modificar y eliminar usuarios',
        'tipo' => 'PHP + MySQL'
    ],
    'practica37' => [
        'nombre' => 'Login con sesiones PHP',
        'descripción' => 'Sistema de autenticación con sesiones',
        'tipo' => 'PHP + MySQL'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Prácticas - Desarrollo Web</title>
    <link rel="stylesheet" href="static/styles.css">
    <link rel="shortcut icon" href="static/icon.png" type="image/png">
</head>
<body>
    <div class="container">
        <h1 class="title">Mis Prácticas de Desarrollo Web</h1>
        <p class="subtitle">Selecciona una práctica para comenzar:</p>

        <div class="prácticas-grid">
            <?php foreach ($prácticas as $carpeta => $práctica): ?>
                <div class="práctica-card">
                    <span class="tipo-badge"><?php echo htmlspecialchars($práctica['tipo']); ?></span>
                    <h2><?php echo htmlspecialchars($práctica['nombre']); ?></h2>
                    <p><?php echo htmlspecialchars($práctica['descripción']); ?></p>
                    <a href="<?php echo $baseUrl . '/' . $carpeta; ?>" class="btn">Entrar</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>