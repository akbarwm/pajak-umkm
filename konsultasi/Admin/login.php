<?php
include("config/connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($db, "SELECT * FROM tb_admin WHERE username='$username'");
    $cek = mysqli_num_rows($login);
    $data = mysqli_fetch_assoc($login);

    if ($cek > 0) {
        $hashedPasswordFromDatabase = $data['password'];

        // Melakukan verifikasi password menggunakan password_verify()
        if (password_verify($password, $hashedPasswordFromDatabase)) {
            // Password cocok, proses login berhasil
            $_SESSION['username'] = $data['username'];
            header("location: index.php");
        } else {
            // Password tidak cocok
            // header("location: login.php?error=password");
            header("location: login.php?error=password");
        }
    } else {
        header("location: login.php?error=email");
    }
}
// $myusername = mysqli_real_escape_string($db, $_POST['username']);
// $mypassword = mysqli_real_escape_string($db, $_POST['password']);

// $sql = "SELECT* FROM tb_admin WHERE `username` = '$myusername' and `pasword` = '$mypassword'";

// $result = mysqli_query($db, $sql);

// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


// $count = mysqli_num_rows($result);

// // If result matched $myusername and $mypassword, table row must be 1 row

// if ($count == 1) {
//     //before PHP 5.3
//     //session_register("myusername");

//     //after PHP 5.3
//     $_SESSION['login_user'] = $myusername;


//     header("location:index.php");
// } else {
// }


if (isset($_GET['back'])) {
    $error = $_GET['back'];

    if ($error == "delete") {
        $query = mysqli_query($db, "DELETE FROM `tb_entry`");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Pajak</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets2/css/sb-admin-2.css" rel="stylesheet">

</head>

<body>



    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6 justify-content">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" required>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block">
                                            Login
                                            </a></button>
                                        <hr>
                                        <a href="rfid.php?back=delete" class="btn btn-warning  btn-block">
                                            <i class="fab fa-scanner-touchscreen"></i> Login with Your Card
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>





        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

</body>


</html>