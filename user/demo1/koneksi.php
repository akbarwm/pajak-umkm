<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "pajak2";

// Buat koneksi ke database
$koneksi = new mysqli($servername, $username, $password, $db);

// Periksa apakah koneksi berhasil
if ($koneksi->connect_error) {
    die('Koneksi database gagal: ' . $koneksi->connect_error);
}

// Setel karakter set UTF-8 untuk koneksi
$koneksi->set_charset('utf8');
