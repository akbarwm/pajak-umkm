<?php

session_start();

include('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM tb_konsultan WHERE email='$email' AND password='$password'");
// $query = mysqli_query($koneksi, "SELECT * FROM tb_appoinment INNER JOIN tb_konsultan ON tb_appoinment.id_konsultans = tb_konsultan.id_konsultan INNER JOIN tb_users ON tb_appoinment.id_users = tb_users.id_users WHERE id_konsultan = '$id'");

// if (mysqli_num_rows($query) == 1) {
//     header('location:../');
// } else {
//     header('location:../');
// }

$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['username'] == "guest") {

        echo "";        // cek jika user login sebagai pegawai
    } else {
        // buat session login dan username
        $_SESSION['id_konsultan'] = $data['id_konsultan'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['bio'] = $data['bio'];
        $_SESSION['profil_pic'] = $data['profil_pic'];
        $_SESSION['alumnus'] = $data['alumnus'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['karir'] = $data['jenjang_karir'];
        $_SESSION['unique_id'] = $data['unique_id'];
        $_SESSION['bidang'] = $data['bidang'];


        // alihkan ke halaman dashboard pegawai
        header("location:../konsultan-dashboard.php");
    }
} else {
    header("location:../index.php?error=1");
}
