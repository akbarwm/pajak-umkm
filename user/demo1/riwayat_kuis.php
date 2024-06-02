<!DOCTYPE html>
<html lang="en">

<head>
    <title>Riwayat Pengerjaan Kuis | Sudut Pajak</title>
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

        .crud-table table thead {
            background: linear-gradient(41deg, #09c778, #01a0f9);
            color: white;
        }

        .table-auto tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .table-auto tbody tr:nth-child(even) {
            background-color: #f3f4f6;
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
                        <h4 class="page-title fw-bold">Riwayat Pengerjaan Kuis</h4>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="main-content">
                            <!-- Tabel -->
                            <div class="crud-table">
                                <table class="table table-auto">
                                    <thead>
                                        <tr>
                                            <th scope="col"> No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Waktu Pengerjaan</th>
                                            <th scope="col">Nilai/100.00</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Lihat Evaluasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Juan Antony</td>
                                            <td>23 menit</td>
                                            <td>80.00/100.00</td>
                                            <td>Selesai</td>
                                            <td>
                                                <a href="evaluasi_kuis.php" style="color: blue; text-decoration: underline;">Evaluasi</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Lea Jonathan</td>
                                            <td>15 menit</td>
                                            <td>60.00/100</td>
                                            <td>Selesai</td>
                                            <td>
                                                <a href="evaluasi_kuis.php" style="color: blue; text-decoration: underline;">Evaluasi</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Fadli Suhairi</td>
                                            <td>20 menit</td>
                                            <td>90.00/100</td>
                                            <td>Selesai</td>
                                            <td>
                                                <a href="evaluasi_kuis.php" style="color: blue; text-decoration: underline;">Evaluasi</a>
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

        <?php include './layout/footer.php'; ?>
    </div>
</body>

</html>