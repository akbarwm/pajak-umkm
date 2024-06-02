<!DOCTYPE html>
<html lang="en">

<head>
    <title>List Kuis | Sudut Pajak</title>
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

        .tambah {
            color: white;
        }

        .table-1 table thead {
            background: linear-gradient(41deg, #09c778, #01a0f9);
            color: white;
            text-align: center;
            padding: 800px;
        }

        .table-1 th {
            padding: 20px 60px 20px 50px;
        }

        .table-1 td {
            text-align: center;
            padding: 20px 55px;
        }

        .btn-delete {
            color: white;
            border: none;
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }

        .btn-edit {
            color: white;
            border: none;
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
                        <h4 class="page-title fw-bold">List Kuis</h4>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-end mb-3">
                            <a href="create_kuis.php" class="btn">
                                <i class="fas fa-plus-circle"></i>
                                <span class="tambah text-white" required>Tambah Kuis</span>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-1">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Judul Kuis</th>
                                                <th scope="col">Waktu</th>
                                                <th scope="col">Jumlah Soal</th>
                                                <th scope="col">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Kuis PPh 21: Tes Pemahaman tentang Pajak Gaji</td>
                                                <td>20 menit</td>
                                                <td>4</td>
                                                <td>
                                                    <a href="list_soal.php"><i class="fa fa-edit btn btn-edit"></i></a>
                                                    <i class="fa fa-trash btn btn-delete ml-2"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Kuis PPh 21: Tes Pemahaman tentang Pajak Gaji</td>
                                                <td>15 menit</td>
                                                <td>3</td>
                                                <td>
                                                    <a href="list_soal.php"><i class="fa fa-edit btn btn-edit"></i></a>
                                                    <i class="fa fa-trash btn btn-delete ml-2"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Kuis PPh 21: Tes Pemahaman tentang Pajak Gaji</td>
                                                <td>15 menit</td>
                                                <td>5</td>
                                                <td>
                                                    <a href="list_soal.php"><i class="fa fa-edit btn btn-edit"></i></a>
                                                    <i class="fa fa-trash btn btn-delete ml-2"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Kuis PPh 21: Tes Pemahaman tentang Pajak Gaji</td>
                                                <td>10 menit</td>
                                                <td>3</td>
                                                <td>
                                                    <a href="list_soal.php"><i class="fa fa-edit btn btn-edit"></i></a>
                                                    <i class="fa fa-trash btn btn-delete ml-2"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include './layout/footer.php'; ?>
    </div>

</body>

</html>