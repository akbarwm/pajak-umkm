<?php
include 'config/connection.php';
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

    <!-- SweetAlert library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
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
                            <div class="col-lg-6"><img src="../img/rfid.jpg" width="90%"></img></div>
                            <div class="col-lg-6 justify-content">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Use Your Card To Login</h1>
                                    </div>
                                    <form action="auth.php" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="uid" aria-describedby="emailHelp" placeholder="UID" name="uid" readonly>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button" id="showPasswordToggle" hidden>
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block" id="loginButton">
                                            Login
                                        </button>
                                        <hr>
                                        <a href="login.php?back=delete" class="btn btn-danger  btn-block">
                                            <i class="fab fa-scanner-touchscreen"></i> Back
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript -->
    <script src="assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages -->
    <script src="assets2/js/sb-admin-2.min.js"></script>

    <!-- SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function cekUID() {
            $.ajax({
                type: "GET",
                url: "entry.php",
                cache: false,
                success: function(response) {
                    console.log(response);
                    $("#uid").val(response);

                    // Jika UID terisi, lakukan query SELECT untuk memeriksa UID dan password di tb_admin
                    if (response !== "") {
                        var uid = response;

                        // Lakukan query SELECT untuk memeriksa UID dan password di tb_admin
                        $.ajax({
                            type: "POST",
                            url: "rfid-auth.php", // Ganti dengan lokasi file PHP yang sesuai
                            data: {
                                uid: uid
                            },
                            success: function(response) {
                                // Jika UID terverifikasi, isi input password dengan password yang ditemukan
                                if (response !== "") {
                                    var data = JSON.parse(response);
                                    var password = data.password;

                                    $("#password").val(password);

                                    // Otomatis melakukan submit setelah UID dan password terisi
                                    $('#loginButton').trigger('click');
                                }
                            },
                            error: function(error) {
                                console.error("Gagal melakukan query SELECT:", error);
                            }
                        });
                    }
                }
            });
        }

        setInterval(cekUID, 2000);

        $(document).ready(function() {
            // Toggle show/hide password
            $('#showPasswordToggle').click(function() {
                var passwordInput = $('#password');
                var passwordInputType = passwordInput.attr('type');

                if (passwordInputType === 'password') {
                    passwordInput.attr('type', 'text');
                } else {
                    passwordInput.attr('type', 'password');
                }
            });
        });
    </script>
</body>

</html>