<?php
// Pastikan file ini memiliki akses ke database dan konfigurasi sesuai dengan lokasi Anda
error_reporting(E_ALL);
session_start();
include('../config/session.php');
include('../config/connection.php'); // Pastikan Anda menyertakan file koneksi database

// Periksa apakah pengguna masuk
if (!isset($_SESSION['id_user'])) {
    // Jika tidak ada, arahkan ke halaman login atau lokasi yang sesuai
    header("Location: login.php");
    exit;
}

// Periksa apakah ada data yang dikirimkan dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan dari formulir
    $no_kuis = $_POST['no_kuis'];
    $judul_kuis = $_POST['judul_kuis'];
    $waktu = $_POST['waktu'];
    $jumlah_soal = $_POST['jumlah_soal'];

    // Lakukan validasi data jika diperlukan
    if (empty($no_kuis) || empty($judul_kuis) || empty($waktu) || empty($jumlah_soal)) {
        $error = "Semua kolom harus diisi.";
    } else {
        // Insert kuis ke database
        $sql = "INSERT INTO quiz_pajak (no_kuis, judul_kuis, waktu, jumlah_soal) 
                VALUES ('$no_kuis', '$judul_kuis', '$waktu', '$jumlah_soal')";
        $result = mysqli_query($db, $sql);

        // Periksa apakah query berhasil dieksekusi
        if ($result) {
            // Jika berhasil, tampilkan pesan dan arahkan pengguna kembali ke halaman list kuis
            echo "<script>alert('Berhasil Menambahkan kuis'); window.location.href = 'dashboard_kuis.php';</script>";
            exit;
        } else {
            // Jika gagal, tampilkan pesan kesalahan
            echo "<script>alert('Terjadi kesalahan saat menambahkan kuis');</script>";
        }
    }
}
