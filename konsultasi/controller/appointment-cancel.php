<?php
include('../conf/config.php');
// Mengambil ID appointment yang akan dihapus dari parameter URL atau form
$appointmentId = $_GET['appointment_number']; // Ubah sesuai dengan nama parameter yang sesuai

// Membuat koneksi ke database
// Memeriksa koneksi

// Menjalankan query DELETE
$query = "DELETE FROM tb_appoinment WHERE id_appoinment = '$appointmentId'";
$result = mysqli_query($koneksi, $query);

// Memeriksa apakah query berhasil dijalankan
if ($result) {
    // Menghapus berhasil
    echo "Appointment berhasil dihapus.";
} else {
    // Menghapus gagal
    echo "Terjadi kesalahan saat menghapus appointment: " . mysqli_error($koneksi);
}

header('location: ../user/appointment_user.php?success=true');
// Misalnya, contoh pembatalan dengan menampilkan pesan
echo "Appointment berhasil dibatalkan";
