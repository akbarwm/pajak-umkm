<?php
$servername = "localhost";
$db = "pajak2";
$username = "root";
$password = "";

try {
    // Create a PDO connection to the database
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: Set a timeout for queries
    $conn->setAttribute(PDO::ATTR_TIMEOUT, 600);

    // Return the PDO connection
    return $conn;
} catch (PDOException $e) {
    // Handle the exception if the connection fails
    echo "Connection failed: " . $e->getMessage();
    die(); // Stop script execution if the connection fails
}
