<?php
// Mulai session

// Atur waktu kadaluwarsa session dalam detik (misalnya 30 menit)
$expireAfter = 3600; // 1 jam

// Periksa apakah session terakhir aktif lebih dari waktu kadaluwarsa yang ditentukan
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $expireAfter)) {
    // Jika session telah kadaluwarsa, hapus semua data session
    session_unset();
    session_destroy();
}

// Atur waktu terakhir akses session
$_SESSION['last_activity'] = time();
