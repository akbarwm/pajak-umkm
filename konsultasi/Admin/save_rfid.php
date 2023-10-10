<?php

if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['password'])) {
    include 'config/connection.php';

    $uid = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $hash_p =  password_hash("$password", PASSWORD_DEFAULT);



    $sql = mysqli_query($db, "  INSERT INTO `tb_admin`(`uid`, `username`, `password`) VALUES ('$uid','$username','$hash_p')");
    if ($sql) {
        mysqli_query($db, "DELETE FROM tb_entry");
    }
    header("location: rfid_create.php");
}
