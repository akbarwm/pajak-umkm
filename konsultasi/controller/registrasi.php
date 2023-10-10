<?php

include('../conf/config.php');

$nama = $_POST['namaLengkap'];
$nohp = $_POST['noHp'];
$username = $_POST['email'];
$password = $_POST['pass'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

function generateUniqueID()
{
    $characters = '0123456789';
    $uniqueID = '';

    for ($i = 0; $i < 7; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $uniqueID .= $characters[$index];
    }

    return $uniqueID;
}

$uniqueID = generateUniqueID();

$query = mysqli_query($koneksi, "INSERT INTO tb_users VALUES ('','$uniqueID','$username','$hashedPassword','$nama','default.png','Online',current_timestamp())");

if ($query) {

    // Redirect ke halaman konsultasi atau halaman lain yang sesuai
    header('location: ../login.php');
} else {
    echo "Terjadi kesalahan saat menyimpan data.";
}
