<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Soal Kuis | Sudut Pajak</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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

        .fa-plus-circle {
            margin-right: 5px;
            color: white;
        }

        .table-1 table thead {
            background: linear-gradient(41deg, #09c778, #01a0f9);
            color: white;
            text-align: center;
            padding: 800px;
        }

        .table-1 td.list-soal {
            max-width: 300px;
            text-align: left;
        }
        .btn-delete,
        .btn-edit {
            color: white;
            border: none;
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }

        .btn-kirim {
            margin-top: 100px;
            color: white;
            border: none;
            width: 130px;
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }

        .font {
            font-size: 18px;
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
                        <h4 class="page-title fw-bold">Daftar Soal Kuis</h4>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-1">
                                <a href="edit_kuis.php" class="btn">
                                    <i class="fas fa-edit"></i>
                                    <span class="tambah text-white" required>Edit Kuis</span>
                                </a>
                            </div>
                            <div class="d-flex justify-content-end col-11">
                                <a href="create_soal.php" class="btn">
                                    <i class="fas fa-plus-circle"></i>
                                    <span class="tambah text-white" required>Tambah Soal</span>
                                </a>
                            </div>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td><p class="fw-bold fs-3">Judul Kuis : </p> </td>
                                    <td><p>Kuis PPh 21: Tes Pemahaman tentang Pajak Gaji</p></td>
                                </tr>
                                <tr>
                                    <td><p class="fw-bold fs-3">Waktu Kuis : </p></td>
                                    <td><p>20 Menit</p></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-1">
                                <div class="table-1">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Soal</th>
                                                <th scope="col">Skor</th>
                                                <th scope="col">Jawaban</th>
                                                <th scope="col">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="list-soal">Bagi penerima penghasilan yang tidak memiliki
                                                    NPWP,
                                                    dikenakan
                                                    pemotongan PPh Pasal 21 dengan tarif lebih tinggi 20% daripada tarif
                                                    yang
                                                    diterapkan terhadap wajib pajak yang memiliki NPWP.</td>
                                                <td class="text-center">20</td>
                                                <td class="text-center">
                                                    <p style="color: green; margin-top: 30px;">Benar</p>
                                                    <p>Salah</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#"><i class="fa fa-edit btn btn-edit"></i></a>
                                                    <i class="fa fa-trash btn btn-delete ml-2"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-kirim">
                                <span class="font">Kirim</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include './layout/footer.php'; ?>
    </div>
</body>

</html>