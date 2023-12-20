<?php
session_start();
$hasil = true;
if (!empty($_POST)) {
    $pdo = require 'koneksi.php';
    $sql = "select * from users where email = :email";
    $query = $pdo->prepare($sql);
    $query->execute(array('email' => $_POST['email']));
    $user = $query->fetch();
    if (!$user) {
        $hasil = false;
    } elseif (sha1($_POST['password']) != $user['password']) {
        $hasil = false;
    } else {
        $hasil = true;
        $_SESSION['user'] = array(
            'id' => $user['id'],
            'nama' => $user['nama'],
            'email' => $user['email'],
        );

        header("Location: index.php");
        exit;
    }
}
?>

<!doctype html>
<html lang="en">

<head>

    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Home | Sudut Pajak </title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- bootstrap v4 css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <!-- rsmenu CSS -->
        <link rel="stylesheet" type="text/css" href="css/rsmenu-main.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        <!-- rsmenu transitions CSS -->
        <link rel="stylesheet" type="text/css" href="css/rsmenu-transitions.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- <link rel="stylesheet" href="css/style2.css"> -->

        <!-- switch color presets css -->
        <link id="switch_style" href="#" rel="stylesheet" type="text/css">
        <!-- Spacing css -->
        <link rel="stylesheet" type="text/css" href="css/spacing.css">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
    </head>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="./img/profil.png" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <div class="sec-title">
                    <h5 class="title bg-left">Silahkan login terlebih dahulu</h5>

                </div>
                <?php
                if (!$hasil) {
                    echo '<p class="text-danger">Email atau password salah</p>';
                }
                ?>
                <form action="" method="POST">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example13">Email</label>
                        <input type="email" id="form1Example13" class="form-control" placeholder="Email address" name="email" required />

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example23">Password</label>
                        <input type="password" id="form1Example23" class="form-control" placeholder="Password" name="password" required />
                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3"> Remember me </label>
                        </div>
                        <a href="#!">Forgot password?</a>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-success btn-block">Sign in</button>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                    </div>

                    <a class="btn btn-primary btn-block" style="background-color: #3b5998" href="daftar.php" role="button">
                        </i>Register
                    </a>

                    <div class="d-flex justify-content-around align-items-center my-4">
                        <a href="../login.php">Login as admin</a>
                        <a href="../konsultasi/konsultan/login.php">Login as konsultan</a>
                    </div>

                </form>
            </div>
        </div>
    </div>




    <script src="boostrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>