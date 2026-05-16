<?php
/**
 * Conexión a la base de datos usando PDO
 * =========================================
 * Las credenciales se cargan desde config.php (no subido al repositorio)
 */

$config = require __DIR__ . '/../config.php';

$host = $config['host'];
$db   = $config['db'];
$user = $config['user'];
$pass = $config['pass'];

$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

/**
 * SQL para crear las tablas (copia y ejecuta en phpMyAdmin de InfinityFree)
 * ========================================================================
 * Copia todo desde "CREATE TABLE" hasta el último ";" y ejecútalo en phpMyAdmin.
 */

/*
-- Tabla: Alumnos
CREATE TABLE IF NOT EXISTS alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    matricula VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(150) NOT NULL,
    carrera VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla: Artículos
CREATE TABLE IF NOT EXISTS articulos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    codigo VARCHAR(50) UNIQUE NOT NULL,
    categoria ENUM('proyector', 'geodesia', 'computo', 'electronica', 'laboratorio', 'otro') NOT NULL,
    descripcion TEXT,
    cantidad INT DEFAULT 1,
    estado ENUM('bueno', 'regular', 'malo') DEFAULT 'bueno',
    ubicacion VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla: Préstamos
CREATE TABLE IF NOT EXISTS prestamos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    carrera ENUM('geodesia', 'sistemas', 'civil', 'electronica') NOT NULL,
    rol ENUM('maestro', 'alumno') NOT NULL,
    articulo_id INT,
    fecha_prestamo DATETIME NOT NULL,
    fecha_entrega DATETIME NOT NULL,
    estado ENUM('activo', 'devuelto', 'atrasado') DEFAULT 'activo',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (articulo_id) REFERENCES articulos(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
*/