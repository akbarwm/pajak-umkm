<?php
session_start();
include('../conf/config.php');

$topik = $_POST['topik'];
$unique_id = $_POST['unique_id'];
$unique_id_k = $_POST['unique_id_k'];
$id_kon = $_POST['konsultans'];
$id_user = $_POST['users'];
$media = $_POST['media'];
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$bidang = $_POST['bidang'];

$unik = strtoupper(substr(uniqid('', true), 0, 3));

$xx = $unik . $unique_id;
$time = $jam . ':00';

// var_dump( $koneksi ); exit;

$sq = mysqli_query($koneksi, "INSERT INTO tb_appoinment (id_appoinment, id_konsultans, id_users, appoinment_number, topik, hari, jam, jenis_pajak, media, appoinment_status, unique_id_user, unique_id_konsultan) 
VALUES (NULL, '$id_kon', '$id_user', '$xx', '$topik', '$tgl', '$time', '$bidang', '$media', 'Booked', '$unique_id', '$unique_id_k')");
//  var_dump( $sq, $koneksi, $q2 ); exit;

$q2 = mysqli_query($koneksi, "INSERT INTO `tb_chat`(`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `created_at`) VALUES   
 (NULL ,'$unique_id', '$unique_id_k', 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.' , NOW())");
 
//  var_dump( $sq, $koneksi, $q2 ); exit;

header('location: ../user/appointment_user.php');
