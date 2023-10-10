<?php

include '../conf/config.php';

$id = $_POST['id_appoinment'];
$id_konsultans = $_POST['id_konsultans'];
$id_users = $_POST['id_users'];
$topik = $_POST['topik'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$jenis_pajak = $_POST['jenis_pajak'];
$media = $_POST['media'];
$number = $_POST['appoinment_number'];
$acc = $_POST['accept'];

// echo $status;


echo $id;



mysqli_query($koneksi, "UPDATE tb_appoinment SET appoinment_status = '$acc' WHERE id_appoinment = '$id';");
header("location:../appoinments.php");
