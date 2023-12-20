<?php
include("connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `LOGIN` = '$myusername' and `PASSWORD` = '$mypassword'";

    $result = mysqli_query($db, $sql);


    $count = mysqli_num_rows($result);

    // var_dump($count);die;
    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_user'] = $row['id'];
        $_SESSION['PROFILE'] = $row['PROFILE'];

        //before PHP 5.3
        //session_register("myusername");


        $_SESSION['login_user'] = $myusername;

        header("location:user/demo1/index.php");
    } else {
        $error = "Username atau password yang Anda masukkan salah, silahkan coba lagi";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sudut Pajak</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>


<body>
    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <h1>Login</h1>
                <hr>
                <p>Selamat Datang </p>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Masukan Username Anda">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Masukan Kata Sandi Anda">
                <?php if (isset($error)) { ?>
                    <p style="background-color: white; color:red"><?= $error ?></p>
                <?php } ?>
                <button type="submit">Login</button>
                <p>Belum Punya Akun?</p>
                <p><a href="registrasi.php<?= isset($_GET['id']) ? '?id=' . $_GET['id'] : '' ?>">Daftar Sekarang</a></p>
            </form>
        </div>
        <div class="right">
            <img src="images/2.png" alt="">
        </div>
    </div>
</body>

</html>