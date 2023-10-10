<?php

session_start();

include('config/connection.php');

$uid = $_POST['uid'];
$password = $_POST['password'];

// // Hash password menggunakan password_hash()
// $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$login = mysqli_query($db, "SELECT * FROM tb_admin WHERE uid='$uid'");


$cek = mysqli_num_rows($login);
$data = mysqli_fetch_assoc($login);


// echo $password, "<br>", $hashedPasswordFromDatabase;
// cek apakah email ditemukan pada database
if ($cek > 0) {


    $hashedPasswordFromDatabase = $data['password'];

    // Melakukan verifikasi password
    if ($password == $hashedPasswordFromDatabase) {
        // Password cocok, proses login berhasil
        $_SESSION['username'] = $data['username'];
        header("location: index.php");
    } else {
        // Password tidak cocok
        header("location: login.php?error=password");
        // echo $hashedPasswordFromDatabase, $password;
    }
} else {
    header("location: login.php?error=email");
}
