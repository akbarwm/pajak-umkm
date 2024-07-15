<?php
session_start();
include('../config/session.php');
include('../config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $id = $_POST['id'];
    $no_kuis = $_POST['no_kuis'];
    $judul_kuis = mysqli_real_escape_string($db, $_POST['judul_kuis']);
    $waktu = $_POST['waktu'];
    $jumlah_soal = $_POST['jumlah_soal'];

    // Query untuk update data kuis berdasarkan ID
    $sql = "UPDATE quiz_pajak SET 
            no_kuis = '$no_kuis', 
            judul_kuis = '$judul_kuis', 
            waktu = '$waktu', 
            jumlah_soal = '$jumlah_soal' 
            WHERE id = '$id'";

    if (mysqli_query($db, $sql)) {
        // Redirect ke halaman dashboard_kuis.php setelah berhasil update
        header("Location: dashboard_kuis.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($db);
    }
}

mysqli_close($db);
