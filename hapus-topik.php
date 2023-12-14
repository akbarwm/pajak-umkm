<?php
require_once 'cek-akses.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$pdo = require 'koneksi.php';
$sql = "SELECT * FROM topik WHERE id=:id AND id_user=:id_user";
$query = $pdo->prepare($sql);
$query->execute(array(
    'id' => $_GET['id'],
    'id_user' => $_SESSION['user']['id']
));

$topik = $query->fetch();
if (!$topik) {
    header("Location: forum.php");
    exit;
}

try {
    $pdo->beginTransaction();
    $queryHapusKomentar = $pdo->prepare("DELETE FROM komentar
        WHERE id_topik=:id_topik");
    $queryHapusKomentar->execute(array(
        'id_topik' => $topik['id']
    ));
    $sqlHapus = "DELETE FROM topik WHERE id=:id AND id_user=:id_user";
    $queryHapus = $pdo->prepare($sqlHapus);
    $queryHapus->execute(array(
        'id' => $_GET['id'],
        'id_user' => $_SESSION['user']['id']
    ));
    $pdo->commit();
} catch (Exception $e) {
    $pdo->rollBack();
    echo $e->getMessage();
    exit;
}

header("Location: forum.php");
