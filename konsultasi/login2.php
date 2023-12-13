<?php
session_start();
$hasil = true;

if (!empty($_POST)) {
    $pdo = require 'koneksi.php';
    $sql = "SELECT * FROM pengguna WHERE email = :email";
    $query = $pdo->prepare($sql);
    $query->execute(array('email' => $_POST['email']));
    $user = $query->fetch();

    if (!$user) {
        $hasil = false;
    } elseif (!password_verify($_POST['password'], $user['password'])) {
        // Ganti kondisi ini jika password disimpan dengan sha1
        // if (sha1($_POST['password']) != $user['password']) {
        $hasil = false;
    } else {
        $hasil = true;
        $_SESSION['user'] = array(
            'id' => $user['id'],
            'nama' => $user['nama'],
            'email' => $user['email'],
        );

        header("Location: ../index.php");
        exit;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Forum: Login</title>
</head>

<body>
    <?php
    $__menuAktif = 'login';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                if (!$hasil) {
                    echo '<p class="text-danger">Email atau password salah</p>';
                }
                ?>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required />
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="boostrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>