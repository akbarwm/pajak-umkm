<?php
$error = '';
$hasil = false;
if (!empty($_POST)) {
    $pdo = require 'koneksi.php';
    if ($_POST['password'] != $_POST['password2']) {
        $error = 'Password dan Ketik Ulang Password harus sama';
    } else if (strlen($_POST['password']) < 6) {
        $error = 'Password harus minimal 6 karakter';
    } else {
        // Validasi email
        $sql = "select count(*) from users where email=:emailUser";
        $query = $pdo->prepare($sql);
        $query->execute(array('emailUser' => $_POST['email']));
        $count = $query->fetchColumn();
        if ($count > 0) {
            $error = 'Gunakan email lain';
        } else {
            $sql = "insert into users (nama, email , password) 
            values (:nama, :email, :password)";
            $query2 = $pdo->prepare($sql);
            $query2->execute(array(
                'nama' => $_POST['nama'],
                'email' => $_POST['email'],
                'password' => sha1($_POST['password']),
            ));
            $hasil = true;
            unset($_POST);
        }
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Forum: Daftar User</title>
</head>

<body>

    <div class="container">
        <h1>Registrasi</h1>
        <p>Silahkan mendaftar sebelum menggunakan forum.</p>
        <hr />
        <?php if ($hasil == true) { ?>
            <p class="text-success">
                Registrasi berhasil, silahkan <a href="login2.php">login</a>.
            </p>
        <?php } ?>
        <?php
        if ($error != '') {
            echo '<p class="text-danger">' . $error . '</p>';
        }
        ?>
        <div class="row">
            <div class="col-md-4">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input class="form-control" type="text" name="nama" required value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ketik Ulang Password</label>
                        <input class="form-control" type="password" name="password2" required>
                    </div>
                    <button class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>