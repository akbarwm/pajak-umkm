<?php
session_start();

include('../conf/config.php');

$id = $_POST['id'];
$media = $_POST['media'];
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$bidang = $_POST['bidang'];
$reschedule = "Reschedule";

$time = $jam . ':00';

// echo $id;

$a = mysqli_query($koneksi, "UPDATE `tb_appoinment` SET `jam`='$time', `hari`='$tgl', `media`='$media', `appoinment_status` = 'Reschedule' , `jenis_pajak`='$bidang' WHERE `id_appoinment`='$id'");
// var_dump( $koneksi, $a );
header("Location: ../user/appointment_user.php");
// echo "<script>window.location.href= '/konsultasi/user/appointment_user.php'</script>"
