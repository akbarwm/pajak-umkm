<?php
include 'config/connection.php';
$sql = mysqli_query($db, "SELECT * FROM tb_entry ");

$result = mysqli_fetch_assoc($sql);

if ($result) {
    echo $result['uid'];
} else {
    echo "#";
}
