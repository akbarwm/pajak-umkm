<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['SERVER_NAME'] == 'sudutpajak.taxcenter-polibatam.id') {
    $koneksi = mysqli_connect('localhost', 'zaxnpiwc_sudutpajak', 'Inipassword12379?!', 'zaxnpiwc_sudutpajak');
} else if ($_SERVER['SERVER_NAME'] == 'sudutpajak.elusivetako.my.id') {
    $koneksi = mysqli_connect('localhost', 'elusivet_sudut_pajak', "Inipassword12379?!", 'elusivet_sudut_pajak');
} else {
    $koneksi = mysqli_connect('localhost', 'root', '', 'pajak2');
}

if (!$koneksi) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
