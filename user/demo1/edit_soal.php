<?php
session_start();
include('../config/session.php');
include('../config/connection.php');

// Pastikan id_kuis diset dalam session
if (!isset($_SESSION['id_kuis'])) {
    echo "Error: id_kuis tidak di-set dalam session.";
    exit;
}

// Ambil id_kuis dari session
$id_kuis = $_SESSION['id_kuis'];

// Ambil data soal yang akan di-edit berdasarkan id_soal (ditambahkan parameter id_soal di URL)
$id_soal = isset($_GET['id_soal']) ? $_GET['id_soal'] : null;
if (!$id_soal) {
    die("Error: ID Soal tidak valid.");
}

// Query untuk mengambil data soal berdasarkan id_soal dan id_kuis
$sql = "SELECT * FROM soal_pajak WHERE id = '$id_soal' AND id_kuis = '$id_kuis'";
$result = mysqli_query($db, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Error: Soal tidak ditemukan.");
}

// Ambil data soal dari hasil query
$soal = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Soal | Sudut Pajak</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="/js/jquery/jquery-3.7.1.js"></script>
    <style>
        .block {
            display: block;
            height: 50px;
            width: 8px;
            margin-right: 5px;
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }

        .btn {
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }
    </style>
</head>

<body>
    <?php include './layout/sidebar.php'; ?>

    <div class="main-panel">
        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <div class="d-flex align-items-center mb-3">
                        <div class="block"></div>
                        <h4 class="page-title fw-bold">Edit Soal</h4>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <form action="update_soal.php" method="POST">
                            <!-- Tambahkan input hidden untuk id_soal -->
                            <input type="hidden" name="id_soal" value="<?= $soal['id'] ?>">
                            <input type="hidden" name="id_kuis" value="<?= $id_kuis ?>">

                            <div class="mb-3">
                                <label for="no_soal" class="form-label">Nomor Soal</label>
                                <input type="number" class="form-control" id="no_soal" name="no_soal" placeholder="Nomor Soal" value="<?= $no_soal['no_soal'] ?>" required>

                            </div>
                            <div class="mb-3">
                                <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="3" placeholder="Pertanyaan Soal" required><?= $soal['soal'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="skor" class="form-label">Skor</label>
                                <input type="number" class="form-control" id="skor" name="skor" placeholder="Skor Soal" value="<?= $soal['skor'] ?>" required>
                            </div>
                            <!-- Field tipe_soal diisi dengan PHP dari variabel $soal -->
                            <div class="mb-5">
                                <p>Tipe Soal</p>
                                <div class="d-flex grid gap-3">
                                    <input type="radio" id="pilihan_ganda" name="tipe_soal" value="Pilihan Ganda" <?= $soal['tipe_soal'] == 'Pilihan Ganda' ? 'checked' : '' ?>>
                                    <label for="pilihan_ganda">Pilihan Ganda</label>
                                    <input type="radio" id="esai" name="tipe_soal" value="Esai" <?= $soal['tipe_soal'] == 'Esai' ? 'checked' : '' ?>>
                                    <label for="esai">Esai</label>
                                </div>
                            </div>
                            <!-- Field pilihan dan jawaban diisi dengan PHP dari variabel $soal -->
                            <div id="soalPilihanGanda">
                                <div class="mb-3">
                                    <h3 class="fw-bold">Pilihan Ganda</h3>
                                </div>
                                <div class="row gap-3">
                                    <div class="d-flex grid gap-1">
                                        <div class="badge text-bg-light rounded px-3">
                                            <p class="fs-6 my-auto">A.</p>
                                        </div>
                                        <input type="text" class="form-control" id="pilihan_a" name="pilihan_a" placeholder="Isi Pilihan Ganda" value="<?= $soal['pilihan_a'] ?>">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="jawaban" value="A" <?= $soal['jawaban'] == 'A' ? 'checked' : '' ?>>
                                        </div>
                                    </div>
                                    <div class="d-flex grid gap-1">
                                        <div class="badge text-bg-light rounded px-3">
                                            <p class="fs-6 my-auto">B.</p>
                                        </div>
                                        <input type="text" class="form-control" id="pilihan_b" name="pilihan_b" placeholder="Isi Pilihan Ganda" value="<?= $soal['pilihan_b'] ?>">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="jawaban" value="B" <?= $soal['jawaban'] == 'B' ? 'checked' : '' ?>>
                                        </div>
                                    </div>
                                    <div class="d-flex grid gap-1">
                                        <div class="badge text-bg-light rounded px-3">
                                            <p class="fs-6 my-auto">C.</p>
                                        </div>
                                        <input type="text" class="form-control" id="pilihan_c" name="pilihan_c" placeholder="Isi Pilihan Ganda" value="<?= $soal['pilihan_c'] ?>">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="jawaban" value="C" <?= $soal['jawaban'] == 'C' ? 'checked' : '' ?>>
                                        </div>
                                    </div>
                                    <div class="d-flex grid gap-1">
                                        <div class="badge text-bg-light rounded px-3">
                                            <p class="fs-6 my-auto">D.</p>
                                        </div>
                                        <input type="text" class="form-control" id="pilihan_d" name="pilihan_d" placeholder="Isi Pilihan Ganda" value="<?= $soal['pilihan_d'] ?>">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="jawaban" value="D" <?= $soal['jawaban'] == 'D' ? 'checked' : '' ?>>
                                        </div>
                                    </div>
                                    <div class="d-flex grid gap-1">
                                        <div class="badge text-bg-light rounded px-3">
                                            <p class="fs-6 my-auto">E.</p>
                                        </div>
                                        <input type="text" class="form-control" id="pilihan_e" name="pilihan_e" placeholder="Isi Pilihan Ganda" value="<?= $soal['pilihan_e'] ?>">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="jawaban" value="E" <?= $soal['jawaban'] == 'E' ? 'checked' : '' ?>>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5" id="submit">
                                <button class="btn text-white" type="submit">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php include './layout/footer.php'; ?>
    </div>

    <script src="../assets/js/soal_kuis.js"></script>
</body>

</html>