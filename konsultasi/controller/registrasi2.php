<?php

include('../conf/config.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$error = '';
$hasil = false;

if (!empty($_POST)) {
    $nama = $_POST['namaLengkap'];
    $nohp = $_POST['noHp'];
    $username = $_POST['email'];
    $password = $_POST['pass'];

    // Validation and processing logic
    if ($password != $_POST['confirm_password']) {
        $error = 'Password dan Ketik Ulang Password harus sama';
    } else if (strlen($password) < 6) {
        $error = 'Password harus minimal 6 karakter';
    } else {
        // Validasi email
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $error = 'Format email tidak valid';
        } else {
            // Your database connection logic, similar to daftar2.php
            $pdo = require 'koneksi.php';

            $sql = "SELECT COUNT(*) FROM tb_users WHERE email=:emailUser";
            $query = $pdo->prepare($sql);

            if (!$query) {
                die("Query preparation failed: " . $pdo->errorInfo()[2]);
            }

            $query->bindParam(':emailUser', $username);
            $query->execute();
            $count = $query->fetchColumn();

            if ($count > 0) {
                $error = 'Gunakan email lain';
            } else {
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                $sql = "INSERT INTO tb_users VALUES ('', :uniqueID, :username, :hashedPassword, :nama, 'default.png', 'Online', current_timestamp())";
                $query2 = $pdo->prepare($sql);

                if (!$query2) {
                    die("Query preparation failed: " . $pdo->errorInfo()[2]);
                }

                $uniqueID = generateUniqueID();

                $query2->bindParam(':uniqueID', $uniqueID);
                $query2->bindParam(':username', $username);
                $query2->bindParam(':hashedPassword', $hashedPassword);
                $query2->bindParam(':nama', $nama);

                $query2->execute();

                $hasil = true;
                unset($_POST);
            }
        }
    }
}

function generateUniqueID()
{
    $characters = '0123456789';
    $uniqueID = '';

    for ($i = 0; $i < 7; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $uniqueID .= $characters[$index];
    }

    return $uniqueID;
}
