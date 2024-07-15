<?php
include('../config/session.php');
include('../config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $id_kuis = $_POST['id_kuis'];

    // Ambil data dari form
    $no_soal = $_POST['no_soal'];
    $pertanyaan = $_POST['pertanyaan'];
    $skor = $_POST['skor'];
    $tipe_soal = $_POST['tipe_soal'];
    $pilihan_a = $_POST['pilihan_a'];
    $pilihan_b = $_POST['pilihan_b'];
    $pilihan_c = $_POST['pilihan_c'];
    $pilihan_d = $_POST['pilihan_d'];
    $pilihan_e = $_POST['pilihan_e'];
    $jawaban = $_POST['jawaban'];

    // Query SQL untuk memasukkan data ke tabel soal_pajak
    $sql = "INSERT INTO soal_pajak (id_kuis, no_soal, soal, skor, tipe_soal, pilihan_a, pilihan_b, pilihan_c, pilihan_d, pilihan_e, jawaban)
            VALUES ('$id_kuis','$no_soal', '$pertanyaan', '$skor', '$tipe_soal', '$pilihan_a', '$pilihan_b', '$pilihan_c', '$pilihan_d', '$pilihan_e', '$jawaban')";

    if (mysqli_query($db, $sql)) {
        // Jika berhasil tambah soal, tampilkan alert berhasil dan redirect
        echo "<script>alert('Berhasil Menambahkan Soal'); window.location.href = 'list_soal.php?id_kuis=$id_kuis';</script>";
        exit();
    } else {
        // Jika gagal tambah soal, tampilkan pesan error
        echo "<script>alert('Terjadi kesalahan saat menambahkan soal');</script>";
    }

    mysqli_close($db);
}
