<?php
include '../config/connection.php';

// Mendapatkan data dari form


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

$unique_id = generateUniqueID();
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$bio = $_POST['bio'];
$alumnus = $_POST['alumnus'];
$bidang = $_POST['bidang'];
$status = $_POST['status'];
$pengalaman = $_POST['pengalaman'];
$jenjang_karir = $_POST['jenjang_karir'];

// Mendapatkan informasi file profil_pic
$profil_pic = $_FILES['profil_pic'];
$profil_pic_name = $profil_pic['name'];
$profil_pic_tmp = $profil_pic['tmp_name'];
$profil_pic_dir = '../img/konsultan_profil/'; // Direktori tempat menyimpan file profil_pic
$profil_pic_path = $profil_pic_dir . $profil_pic_name;

// Memindahkan file profil_pic ke direktori yang ditentukan
move_uploaded_file($profil_pic_tmp, $profil_pic_path);


// Query INSERT INTO untuk menyimpan data ke tabel tb_konsultan
$query = "INSERT INTO tb_konsultan (id_konsultan, unique_id, nama, email, password, bio, profil_pic, 
            alumnus, bidang, status, pengalaman, jenjang_karir) 
VALUES ( NULL, '$unique_id', '$nama', '$email', '$password', '$bio', '$profil_pic_name', 
'$alumnus', '$bidang', '$status', '$pengalaman', '$jenjang_karir')";

if (mysqli_query($db, $query)) {
    // Jika query berhasil dijalankan, redirect ke halaman sukses atau tampilkan pesan sukses
    header("Location: konsultan_list.php");
    exit();
} else {
    // Jika query gagal dijalankan, redirect ke halaman error atau tampilkan pesan error
    header("Location: konsultan_list.php?tambah=gagal");
    exit();
}

mysqli_close($connection);
