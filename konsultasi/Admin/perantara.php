<?php
// File: perantara.php

// Mengecek apakah permintaan yang diterima adalah melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data yang dikirim melalui POST
    $output = $_POST['output'];

    // Kirim data ke file rest.php menggunakan CURL
    $url = 'http://localhost/pblsudutpajak/Admin/rest.php';
    $data = array('output' => $output);

    // Inisialisasi CURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // Eksekusi CURL dan tangkap respons
    $response = curl_exec($ch);

    // Cek apakah CURL berhasil atau tidak
    if ($response === false) {
        echo 'Gagal mengirim data ke rest.php: ' . curl_error($ch);
    } else {
        echo 'Data terkirim ke rest.php';
    }

    // Tutup CURL
    curl_close($ch);
} else {
    // Jika permintaan bukan melalui metode POST, keluarkan pesan kesalahan
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'Metode yang diizinkan hanya POST';
}
