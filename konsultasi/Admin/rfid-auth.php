<?php
include 'config/connection.php';

// Mendapatkan nilai UID yang dikirim dari JavaScript
$uid = $_POST["uid"];

// Melakukan query SELECT untuk memeriksa UID dan password di tb_admin
$sql = "SELECT * FROM tb_admin WHERE uid = '$uid'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // Jika UID ditemukan, mengambil password dari hasil query
    $row = $result->fetch_assoc();
    $password = $row["password"];


    
    // Membuat array data dengan UID dan password
    $data = array(
        "password" => $password
    );

    // Mengirimkan data dalam format JSON
    echo json_encode($data);
} else {
    // Jika UID tidak ditemukan, mengirimkan respons JSON kosong
    echo json_encode(null);
}

// Menutup koneksi database
$db->close();
?>
