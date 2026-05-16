<?php
/**
 * Conexión a la base de datos - Práctica 37
 * ==========================================
 * Reutiliza la conexión de práctica 36
 * Los usuarios se guardan en la misma tabla "usuarios"
 */

$host = 'localhost';      // Cambiar después: host de InfinityFree
$db   = 'tu_db';         // Cambiar después: nombre de tu base de datos
$user = 'tu_usuario';    // Cambiar después: usuario de MySQL
$pass = 'tu_password';   // Cambiar después: contraseña de MySQL

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