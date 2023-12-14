<?php
require_once 'cek-akses.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: forum.php");
    exit;
}

$pdo = require 'koneksi.php';
$sql = "SELECT * FROM komentar WHERE id=:id and id_user=:id_user";
$query = $pdo->prepare($sql);
$query->execute(array(
    'id' => $_GET['id'],
    'id_user' => $_SESSION['user']['id']
));
$komentar = $query->fetch();
if (!$komentar) {
    header("Location: forum.php");
    exit;
}

$sqlHapus = "DELETE FROM komentar WHERE id=:id and id_user=:id_user";
$queryHapus = $pdo->prepare($sqlHapus);
$queryHapus->execute(array(
    'id' => $_GET['id'],
    'id_user' => $_SESSION['user']['id']
));

header("Location: lihat-topik.php?id=" . $komentar['id_topik']);
