<?php
$servername = "localhost";
$db = "pajak2";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_TIMEOUT, 600);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

return $pdo;
