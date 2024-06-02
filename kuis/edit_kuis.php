<?php
// Pastikan file ini memiliki akses ke database dan konfigurasi sesuai dengan lokasi Anda
error_reporting(false);
session_start();
include('../config/session.php');

// Periksa apakah pengguna masuk
if (!isset($_SESSION['id_user'])) {
    // Jika tidak ada, arahkan ke halaman login atau lokasi yang sesuai
    header("Location: login.php");
    exit;
}

// Ambil ID kuis dari parameter URL
$id = $_GET['id'];

// Ambil data kuis dari database berdasarkan ID
$sql = "SELECT * FROM quiz_pajak WHERE id='$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Kuis | Sudut Pajak</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">
</head>
<body>
    <?php include './layout/sidebar.php'; ?>
    <div class="main-panel">
        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Edit Kuis</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="index.php">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Edit Kuis</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="update_kuis.php" method="POST">
                                    <input type="hidden" name="id_kuis" value="<?= $row['id'] ?>">
                                    <div class="form-group">
                                        <label for="soal">Soal</label>
                                        <textarea class="form-control" id="soal" name="soal"><?= $row['soal'] ?></textarea>
                                    </div>
                                    <div class="form-group">
    <label>Jawaban Benar</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jawaban_benar" id="jawaban_A" value="A" <?= ($row['jawaban_benar'] == 'A') ? 'checked' : '' ?>>
        <label class="form-check-label" for="jawaban_A">A</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jawaban_benar" id="jawaban_B" value="B" <?= ($row['jawaban_benar'] == 'B') ? 'checked' : '' ?>>
        <label class="form-check-label" for="jawaban_B">B</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jawaban_benar" id="jawaban_C" value="C" <?= ($row['jawaban_benar'] == 'C') ? 'checked' : '' ?>>
        <label class="form-check-label" for="jawaban_C">C</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jawaban_benar" id="jawaban_D" value="D" <?= ($row['jawaban_benar'] == 'D') ? 'checked' : '' ?>>
        <label class="form-check-label" for="jawaban_D">D</label>
    </div>
</div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './layout/footer.php'; ?>
</body>
</html>
