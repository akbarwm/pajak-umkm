<!DOCTYPE html>
<html lang="en">

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
    <link id="switch_style" href="#" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/spacing.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
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
    <?php
    session_start();
    include 'koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        // Query SQL untuk mengambil data pengguna berdasarkan username
        $sql = "SELECT id, nama, email, password FROM users WHERE nama = :nama";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nama', $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Gunakan password_verify untuk memverifikasi password
            if (password_verify($password, $row['password'])) {
                // Password benar, set variabel sesi
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['password'] = $row['password'];

                // Redirect ke halaman kuis atau halaman lainnya
                header("Location: quiz_pajak.php");
                exit();
            } else {
                // Password salah
                header("Location: kuis.php?error=password");
                exit();
            }
        } else {
            // Username tidak ditemukan
            header("Location: kuis.php?error=username");
            exit();
        }
    }
    ?>

    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];

        if ($error == "password") {
            echo '<div id="passwordAlert" class="alert alert-danger" role="alert">Password tidak cocok. Silakan coba lagi.</div>';
        } elseif ($error == "username") {
            echo '<div id="emailAlert" class="alert alert-danger" role="alert">Username tidak ditemukan. Silakan coba lagi.</div>';
        } elseif ($error == "session_expired") {
            echo '<div id="emailAlert" class="alert alert-danger" role="alert">Session Expired. Silahkan login</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Anda perlu login</div>';
        }
    }
    ?>
    <br><br><br>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="./img/profil.png" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <div class="sec-title">
                    <h5 class="title bg-left">Silahkan login terlebih dahulu Sebelum Memulai Kuis</h5>
                </div>
                <form action="" method="post">
                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example13">Username</label>
                        <input type="text" id="form1Example13" class="form-control" placeholder="Masukkan Username" name="username" required />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example23">Password</label>
                        <input type="password" id="form1Example23" class="form-control" placeholder="Masukkan Password" name="password" required />
                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3"> Remember me </label>
                        </div>

                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-success btn-block">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>