<?php

include('../conf/config.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$error = '';
$hasil = false;

if (!empty($_POST)) {
    $nama = $_POST['nama'];
    $nohp = $_POST['no_hp'];
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Validation and processing logic
    if ($password != $_POST['confirm_password']) {
        $error = 'Password dan Ketik Ulang Password harus sama';
    } else if (strlen($password) < 6) {
        $error = 'Password harus minimal 6 karakter';
    } else {
        // Validasi email
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $error = 'Format email tidak valid';
        } else {
            // Your database connection logic, similar to daftar2.php
            $pdo = require 'koneksi.php';

            $sql = "SELECT COUNT(*) FROM tb_users WHERE email=:emailUser";
            $query = $pdo->prepare($sql);

            if (!$query) {
                die("Query preparation failed: " . $pdo->errorInfo()[2]);
            }

            $query->bindParam(':emailUser', $username);
            $query->execute();
            $count = $query->fetchColumn();

            if ($count > 0) {
                $error = 'Gunakan email lain';
            } else {
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                $sql = "INSERT INTO tb_users VALUES ('', :uniqueID, :username, :hashedPassword, :nama, 'default.png', 'Online', current_timestamp())";
                $query2 = $pdo->prepare($sql);

                if (!$query2) {
                    die("Query preparation failed: " . $pdo->errorInfo()[2]);
                }

                $uniqueID = generateUniqueID();

                $query2->bindParam(':uniqueID', $uniqueID);
                $query2->bindParam(':username', $username);
                $query2->bindParam(':hashedPassword', $hashedPassword);
                $query2->bindParam(':nama', $nama);

                $query2->execute();

                $hasil = true;
                unset($_POST);
            }
        }
    }
}

function generateUniqueID()
{
    $characters = '0123456789';
    $uniqueID = '';

    for ($i = 0; $i < 7; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $uniqueID .= $characters[$index];
    }

    return $uniqueID;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

</head>

<body>
    <!-- navbar -->


    <!-- end navbar -->

    <!--  -->
    <section id="page-conttent ">
        <div class="my-0 my-md-auto">
            <div class="row d-flex flex-row justify-content-center">
                <div class="col-12 col-md-5 bg-light p-5 align-items-start justify-content-center text-center">
                    <div class="">
                        <h4>Selesaikan Pendaftaran</h4>
                        <p class="font-small-10pt">langkapi data kamu untuk menggunakan layanan web Ini</p>
                        <div>
                            <img src="img/loginIustration.png" alt="" class="">
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-5 p-5">
                    <h3 class="fw-bold mb-5">Lengkapi Biodata Diri</h3>

                    <form action="controller/registrasi2.php" method="post">
                        <div class="mb-3 ">
                            <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control py-2 py-xxl-3" name="namaLengkap" placeholder="Nama" required value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="noHp" class="form-label">No Hp(opsional)</label>
                            <input type="text" class="form-control py-2 py-xxl-3" name="noHp" placeholder="123456xxxxxxxxxx">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control py-2 py-xxl-3" name="email" placeholder="Email@anda.com" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control py-2 py-xxl-3" name="pass" id="txtPassword" placeholder="Minimal 8 karakter" required>
                        </div>
                        <div class="mb-5">
                            <label for="confirm_password">Konfirmasi Password:</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>

                            <div class="invalid-feedback">
                                Password tidak cocok. Mohon periksa kembali.
                            </div>
                            <div class="valid-feedback">
                                Password cocok.
                            </div>
                        </div>
                        <div class="row">

                            <!-- /.col -->
                            <div class="col-12">
                                <button onclick="sukses()" type="submit" class="btn btn-primary btn-block swalDefaultSuccess">Register</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <!-- footer -->
    <!--  -->
    <!-- All Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Validasi konfirmasi password saat input berubah
        $('#confirm_password').on('keyup', function() {
            var password = $('#txtPassword').val();
            var confirm_password = $(this).val();

            if (password !== confirm_password) {
                $(this).removeClass('is-valid').addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid').addClass('is-valid');
            }
        });
    });
</script>
<!-- <script type="text/javascript">
        $(function () {
            $("#txtConfirmPassword").click(function () {
                var password = $("#txtPassword").val();
                var confirmPassword = $("#txtConfirmPassword").val();
                if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            });
        });
    </script> -->