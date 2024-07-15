<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kuis</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style2.css">

    <style>
        .btn {
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }
    </style>
</head>

<body>
    <?php include './layout/sidebar.php'; ?>

    <div class="main-panel">
        <div class="container mt-5">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Edit Kuis</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="index.php">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-body">
                        <?php
                        // Ambil data kuis berdasarkan ID dari parameter GET
                        include('../config/connection.php');
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM quiz_pajak WHERE id = '$id'";
                        $result = mysqli_query($db, $sql);
                        $row = mysqli_fetch_assoc($result);
                        ?>
                        <form action="update_kuis.php" method="POST">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <div class="form-group">
                                <label for="no_kuis">No. Kuis</label>
                                <input type="number" name="no_kuis" value="<?= $row['no_kuis'] ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="judul_kuis">Judul Kuis</label>
                                <input type="text" name="judul_kuis" value="<?= $row['judul_kuis'] ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu Pengerjaan</label>
                                <input type="number" name="waktu" value="<?= $row['waktu'] ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_soal">Jumlah Soal</label>
                                <input type="number" name="jumlah_soal" value="<?= $row['jumlah_soal'] ?>" class="form-control" required>
                            </div>

                            <button class="btn text-white" type="submit">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>