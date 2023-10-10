<?php
session_start();

include('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

// Hash password menggunakan password_hash()
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$login = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE email='$email'");


$cek = mysqli_num_rows($login);

// cek apakah email ditemukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);
	$hashedPasswordFromDatabase = $data['password'];

	// Melakukan verifikasi password
	if (password_verify($password, $hashedPasswordFromDatabase)) {
		// Password cocok, proses login berhasil

		// Cek jika user login
		$_SESSION['foto_profil'] = $data['foto_profil'];
		$_SESSION['last_seen'] = $data['last_seen'];
		$_SESSION['id'] = $data['id_users'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['email'] = $data['email'];
		$_SESSION['status'] = $data['status'];
		$_SESSION['unique_id'] = $data['unique_id'];

		header("location: ../konsultasi.php");
	} else {
		// Password tidak cocok
		header("location:../login.php?error=password");
	}
} else {
	header("location:../login.php?error=email");
}
