
<?php

session_start();
include_once "../conf/config.php";
$outgoing_id = $_SESSION['unique_id'];
$query = mysqli_query($koneksi, "SELECT *, u.nama AS nama_user, k.nama AS nama_konsultan 
        FROM tb_appoinment AS a 
        INNER JOIN tb_users AS u ON a.id_users = u.id_users 
        INNER JOIN tb_konsultan AS k ON a.id_konsultans = k.id_konsultan 
        WHERE a.unique_id_user = '$outgoing_id' OR a.unique_id_konsultan = '$outgoing_id' 
        GROUP BY a.unique_id_user, a.unique_id_konsultan");


$output = "";
if (mysqli_num_rows($query) == 0) {
    $output .= "Anda belum mempunyai chat";
} elseif (mysqli_num_rows($query) > 0) {
    include_once "data.php";
}
echo $output;
