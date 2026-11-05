<?php
declare(strict_types=1);

$dsn = 'mysql:host=localhost;dbname=ishmatov;charset=utf8mb4';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $exception) {
    exit('Ошибка подключения к базе данных: ' . htmlspecialchars($exception->getMessage(), ENT_QUOTES, 'UTF-8'));
}
