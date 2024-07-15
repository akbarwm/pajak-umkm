<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kuis</title>
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
                    <h4 class="page-title">Tambah Kuis</h4>
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
                        <form action="create_kuis.php" method="POST">
                            <div class="form-group">
                                <label for="no_kuis">No. Kuis</label>
                                <input type="number" name="no_kuis" placeholder="Masukkan Nomor Soal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="judul_kuis">Judul Kuis</label>
                                <input type="text" name="judul_kuis" placeholder="Masukkan Judul Kuis" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu Pengerjaan</label>
                                <input type="number" name="waktu" placeholder="Masukkan Waktu Pengerjaan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_soal">Jumlah Soal</label>
                                <input type="number" name="jumlah_soal" placeholder="Masukkan Jumlah Soal Kuis" class="form-control" required>
                            </div>

                            <?php if (isset($error)) { ?>
                                <p class="alert alert-danger"><?= $error ?></p>
                            <?php } ?>
                            <br>
                            <div>
                                <button class="btn text-white" type="submit">+ Tambah Kuis</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>