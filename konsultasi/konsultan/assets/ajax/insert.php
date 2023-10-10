<?php

session_start();
include('../../conf/config.php');

$message = $_POST['message'];
$to_id = $_POST['to_id'];

$from_id = $_SESSION['id_konsultan'];

$pesan = mysqli_query($koneksi, ("INSERT INTO `tb_chat`(`chats_id`, `from_id`, `to_id`, `message`, `opened`, `created_at`) VALUES 
(NULL,'$from_id','$to_id','$message','0',current_timestamp())"));

if ($pesan) {
    $conv = mysqli_query($koneksi, ("SELECT * FROM `tb_conversation` 
    WHERE `user_1`= $from_id AND `user_2` = '$to_id' OR `user_2`= $from_id AND `user_1` = $to_id"));

    if ($conv->fetch_row() == false) {
        mysqli_query($koneksi, ("INSERT INTO `tb_conversation`(`id_conversation`, `user_1`, `user_2`) 
        VALUES (NULL,'$from_id','$to_id')"));
    }
}

define('TIMEZONE', 'Asia/Jakarta');
date_default_timezone_set(TIMEZONE);
$time = date("h:i");

?>

<li class="media sent">
    <div class="media-body">

        <div class="msg-box">
            <div>
                <p><?= $message ?></p>
                <ul class="chat-msg-info">
                    <li>
                        <div class="chat-time">
                            <span><?= $time ?></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</li <?php
