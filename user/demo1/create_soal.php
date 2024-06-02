<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="/js/jquery/jquery-3.7.1.js"></script>
    <title>Tambah Soal | Sudut Pajak</title>
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
                        <h4 class="page-title fw-bold">Tambah Soal</h4>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <form action="list_soal.php" method="POST">
                            <div class="mb-3">
                                <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                <textarea class="form-control" id="pertanyaan" rows="3"
                                    placeholder="Pertanyaan Soal"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="skor" class="form-label">Skor</label>
                                <input type="number" class="form-control" id="skor"
                                    placeholder="Skor Soal">
                            </div>
                            <!-- tipe soal -->
                            <div class="mb-5">
                                <p>Tipe Soal</p>
                                <div class="d-flex grid gap-3">
                                    <input type="radio" id="pilihan_ganda" name="tipe_soal" value="pilihan_ganda" checked>
                                    <label for="pilihan_ganda">Pilihan Ganda</label>
                                    <input type="radio" id="esai" name="tipe_soal" value="esai">
                                    <label for="esai">Esai</label>
                                </div>                                    
                            </div>
                            <!-- konten soal pilihan ganda -->
                            <div id="soalPilihanGanda" class="">
                                <div class="mb-3">
                                    <h3 class="fw-bold">Pilihan Ganda</h3>
                                </div>
                                <div class="row gap-3">
                                    <div class="d-flex grid gap-1">
                                        <div class="badge text-bg-light rounded px-3">
                                            <p class="fs-6 my-auto">A.</p>
                                        </div>
                                        <input type="text" class="form-control" id="pilihan_a"
                                            placeholder="Isi Pilihan Ganda">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="radio-4" id="jawaban_a"
                                                checked>
                                        </div>
                                    </div>
                                    <div class="d-flex grid gap-1">
                                        <div class="badge text-bg-light rounded px-3">
                                            <p class="fs-6 my-auto">B.</p>
                                        </div>
                                        <input type="text" class="form-control" id="pilihan_b"
                                            placeholder="Isi Pilihan Ganda" disabled>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="radio-4" id="jawaban_b"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="d-flex grid gap-1">
                                        <div class="badge text-bg-light rounded px-3">
                                            <p class="fs-6 my-auto">C.</p>
                                        </div>
                                        <input type="text" class="form-control" id="pilihan_c"
                                            placeholder="Isi Pilihan Ganda" disabled>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="radio-4" id="jawaban_c"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="d-flex grid gap-1">
                                        <div class="badge text-bg-light rounded px-3">
                                            <p class="fs-6 my-auto">D.</p>
                                        </div>
                                        <input type="text" class="form-control" id="pilihan_d"
                                            placeholder="Isi Pilihan Ganda" disabled>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="radio-4" id="jawaban_d"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="d-flex grid gap-1">
                                        <div class="badge text-bg-light rounded px-3">
                                            <p class="fs-6 my-auto">E.</p>
                                        </div>
                                        <input type="text" class="form-control" id="pilihan_e"
                                            placeholder="Isi Pilihan Ganda" disabled>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="radio-4" id="jawaban_e"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- konten soal esai -->
                            <div id="soalEsai" class="visually-hidden"></div>

                            <div class="mt-5" id="submit">
                                <a href="list_soal.php" class="btn text-white">Tambah</a>
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