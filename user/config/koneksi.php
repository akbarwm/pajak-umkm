<?php
$servername = "localhost";
$db = "pajak2";
$username = "root";
$password = "";

try {
    $koneksi = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

    // Atur mode error PDO ke Exception
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
