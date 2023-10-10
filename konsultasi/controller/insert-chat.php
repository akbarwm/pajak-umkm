<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    include_once "../conf/config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = mysqli_real_escape_string($koneksi, $_POST['incoming_id']);
    $message = mysqli_real_escape_string($koneksi, $_POST['message']);


    if (!empty($message)) {
        $sql = mysqli_query($koneksi, "INSERT INTO tb_chat (incoming_msg_id, outgoing_msg_id, msg, created_at)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}', NOW())") or die(mysqli_error($conn));
    }
} else {
    header("location: ../login.php");
}
