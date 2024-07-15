<?php
session_start();
include('../config/session.php');
include('../config/connection.php');

// Pastikan id_kuis dan id_soal diset
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $id_kuis = $_POST['id_kuis'];
    $id_soal = $_POST['id_soal'];
    $no_soal = mysqli_real_escape_string($db, $_POST['no_soal']);
    $pertanyaan = mysqli_real_escape_string($db, $_POST['pertanyaan']);
    $skor = mysqli_real_escape_string($db, $_POST['skor']);
    $tipe_soal = mysqli_real_escape_string($db, $_POST['tipe_soal']);
    $pilihan_a = mysqli_real_escape_string($db, $_POST['pilihan_a']);
    $pilihan_b = mysqli_real_escape_string($db, $_POST['pilihan_b']);
    $pilihan_c = mysqli_real_escape_string($db, $_POST['pilihan_c']);
    $pilihan_d = mysqli_real_escape_string($db, $_POST['pilihan_d']);
    $pilihan_e = mysqli_real_escape_string($db, $_POST['pilihan_e']);
    $jawaban = mysqli_real_escape_string($db, $_POST['jawaban']);

    // Query untuk update data soal berdasarkan id dan id_kuis
    $sql = "UPDATE soal_pajak SET 
        no_soal = '$no_soal',
        soal = '$pertanyaan', 
        skor = '$skor', 
        tipe_soal = '$tipe_soal', 
        pilihan_a = '$pilihan_a', 
        pilihan_b = '$pilihan_b', 
        pilihan_c = '$pilihan_c', 
        pilihan_d = '$pilihan_d', 
        pilihan_e = '$pilihan_e', 
        jawaban = '$jawaban' 
        WHERE id = '$id_soal' AND id_kuis = '$id_kuis'";

    if (mysqli_query($db, $sql)) {
        // Jika berhasil, tampilkan alert berhasil dan arahkan kembali ke halaman list soal
        echo "<script>alert('Berhasil Memperbarui Soal'); window.location.href = 'list_soal.php?id_kuis=$id_kuis';</script>";
        exit;
    } else {
        echo "Error: " . mysqli_error($db);
    }
}

mysqli_close($db);
