<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Kuis | Sudut Pajak</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                        <h4 class="page-title fw-bold">Edit Kuis</h4>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="pertanyaan" class="form-label fw-bold">Judul</label>
                                <input type="text" class="form-control" id="judul" rows="3"
                                    placeholder="Judul Kuis"></input>
                            </div>
                            <div class="mb-3">
                                <label for="pertanyaan" class="form-label fw-bold">Waktu</label>
                                <input type="text" class="form-control" id="judul" rows="3"
                                    placeholder="Waktu Pengerjaan"></input>
                            </div>
                            <div class="mt-5">
                                <a href="" class="btn">
                                    <span class="tambah text-white" required>Tambah</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php include './layout/footer.php'; ?>
    </div>
</body>

</html>