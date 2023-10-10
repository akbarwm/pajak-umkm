<?php
// include('../conf/config.php');

// date_default_timezone_set('Asia/Jakarta');
// $currentDateTime = date('Y-m-d H:i:s');

// // Mendapatkan semua appointment dengan status "Accept"
// $query = "SELECT * FROM tb_appoinment WHERE appoinment_status = 'Accept'";
// $result = mysqli_query($koneksi, $query);

// if ($result) {
//     // Mengiterasi setiap baris appointment
//     while ($row = mysqli_fetch_assoc($result)) {
//         $appointmentId = $row['id_appoinment'];
//         $datetime = $row['hari'];

//         // Memeriksa jika datetime sudah melewati current date
//         if (strtotime($datetime) < strtotime($currentDateTime)) {
//             // Mengubah status menjadi "Ongoing"
//             $updateQuery = "UPDATE tb_appoinment SET appoinment_status = 'Ongoing' WHERE id_appoinment = '$appointmentId'";
//             $updateResult = mysqli_query($koneksi, $updateQuery);

//             if ($updateResult) {
//                 echo "Appointment dengan ID $appointmentId berhasil diubah menjadi Ongoing.<br>";
//             } else {
//                 echo "Gagal mengubah status appointment dengan ID $appointmentId: " . mysqli_error($koneksi) . "<br>";
//             }
//         }
//     }
// } else {
//     echo "Terjadi kesalahan saat mengambil data appointment: " . mysqli_error($koneksi);
// }
