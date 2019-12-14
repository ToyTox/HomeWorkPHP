<?php
global $pdo;

try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=test_db;charset=utf8", 'root', 'root', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
} catch (PDOException $e) {
    echo $e->getMessage();
    die;
}

