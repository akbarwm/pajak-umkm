<?php
session_start();
include('connection.php');



$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db, "SELECT `name` FROM users WHERE `LOGIN` = '$user_check' ");

//    var_dump( $db ); die;

if (mysqli_num_rows($ses_sql) != 1) {
    if (is_file('../../login.php')) {
        
        header("Location: ../../login.php");
    } else {
        header("Location: login.php");
    }
}



$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$_SESSION['name'] = $row['NAME'];

$login_session = $row['NAME'];

if (!isset($_SESSION['login_user'])) {

    if (is_file('../../login.php')) {
        header("Location: ../../login.php");
    } else {
        header("Location: login.php");
    }
}
