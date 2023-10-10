<?php
session_start();

// periksa apakah session sudah aktif
if (session_status() === PHP_SESSION_ACTIVE) {
    // hancurkan session
    session_destroy();
}

// redirect ke halaman login
header("location: ../index.php");
