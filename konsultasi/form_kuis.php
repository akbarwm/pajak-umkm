<?php
session_start();
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // Waktu mulai kuis
    $_SESSION['waktu_mulai'] = date('Y-m-d H:i:s');

    // Simpan nama dan email ke session
    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;

    // Redirect ke halaman quiz_pajak1.php
    header('Location: quiz_pajak1.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #fff;
        }

        .quiz-container {
            max-width: 600px;
            margin: 10% auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #289C5E;
            color: #fff;
            padding: 10px 20px;
            margin: 15px 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #4FA2DE;
        }

        .btn {
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }
    </style>
</head>

<body>
    <!-- Header Menu Start -->
    <?php include 'navbar4.php'; ?>
    <br>
    <div class="quiz-container">
        <h3 class="text-center">Selamat Datang</h3>
        <p class="text-center">Selamat mengerjakan, jangan lupa berdoa dulu.</p>
        <form id="quiz-form" action="form_kuis.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required pattern="[A-Za-z\s]+" title="Nama harus terdiri dari huruf saja" />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn text-white text-center" type="submit">Mulai</button>
            </div>
        </form>
    </div>
    <?php include '../layout/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qm1uZY5ZsDJPXyMN1Xy2PyoEzNLC6rZ2y5+KZ8+FfqM7LTzh8DP4I4BYIkQ1L/s" crossorigin="anonymous"></script>
</body>

</html>