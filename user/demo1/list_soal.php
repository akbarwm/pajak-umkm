<?php
session_start();
include('../config/session.php');
include('../config/connection.php');

$id_kuis = isset($_GET['id_kuis']) ? $_GET['id_kuis'] : (isset($_SESSION['id_kuis']) ? $_SESSION['id_kuis'] : null);

if (!$id_kuis) {
    die("Error: ID Kuis tidak valid.");
}

$_SESSION['id_kuis'] = $id_kuis;

$sql_kuis = "SELECT * FROM quiz_pajak WHERE id = '$id_kuis'";
$result_kuis = mysqli_query($db, $sql_kuis);

// Periksa apakah data kuis ditemukan
if (mysqli_num_rows($result_kuis) > 0) {
    $kuis = mysqli_fetch_assoc($result_kuis);

    $sql_soal = "SELECT * FROM soal_pajak WHERE id_kuis = '$id_kuis'";
    $result_soal = mysqli_query($db, $sql_soal);
    $rows = mysqli_fetch_all($result_soal, MYSQLI_ASSOC);
} else {

    $kuis = array();
    $rows = array();
}
?>
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
            padding: 8px;
            /* Perbaikan padding yang seharusnya */
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
            margin-top: 10px;
            /* Perbaikan margin top yang seharusnya */
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
                                <a href="tambah_soal.php?id_kuis=<?= $id_kuis ?>" class="btn">
                                    <i class="fas fa-plus-circle"></i>
                                    <span class="tambah text-white" required>Tambah Soal</span>
                                </a>
                            </div>
                            <div class="d-flex justify-content-end col-11">

                            </div>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td>
                                        <p class="fw-bold fs-3">Judul Kuis : </p>
                                    </td>
                                    <td>
                                        <p><?= isset($kuis['judul_kuis']) ? $kuis['judul_kuis'] : 'Data tidak tersedia' ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="fw-bold fs-3">Waktu Kuis : </p>
                                    </td>
                                    <td>
                                        <p><?= isset($kuis['waktu']) ? $kuis['waktu'] . ' Menit' : 'Data tidak tersedia' ?></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-1">
                                <div class="table-1">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Soal</th>
                                                <th scope="col">Skor</th>
                                                <th scope="col">Jawaban Benar</th>
                                                <th scope="col">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($rows as $row) { ?>
                                                <tr>
                                                    <td class="nomor-soal text-center"><?= $row['no_soal'] ?></td>
                                                    <td class="list-soal"><?= $row['soal'] ?></td>
                                                    <td class="text-center"><?= $row['skor'] ?></td>
                                                    <td class="text-center"><?= $row['jawaban'] ?></td>
                                                    <td class="text-center">
                                                        <a href="edit_soal.php?id_kuis=<?= $id_kuis ?>&id_soal=<?= $row['id'] ?>"><i class="fa fa-edit btn btn-edit"></i></a>
                                                        <button onclick="deleteSoal(<?= $row['id'] ?>)" class="btn btn-delete ml-2"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include './layout/footer.php'; ?>
    </div>
</body>
<script>
    function deleteSoal(id_soal) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        });

        swalWithBootstrapButtons.fire({
            title: 'Apa kamu yakin?',
            text: "Anda tidak akan dapat mengembalikan data ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Tidak, batalkan!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: 'delete_soal.php',
                    data: {
                        id_soal: id_soal,
                        id_kuis: <?= $id_kuis ?>
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            swalWithBootstrapButtons.fire(
                                'Terhapus!',
                                'Data soal berhasil dihapus.',
                                'success'
                            ).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            swalWithBootstrapButtons.fire(
                                'Gagal!',
                                'Gagal menghapus data soal.',
                                'error'
                            );
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        swalWithBootstrapButtons.fire(
                            'Error',
                            'Terjadi kesalahan saat menghapus soal.',
                            'error'
                        );
                    }
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire(
                    'Dibatalkan',
                    'Data soal aman :)',
                    'error'
                );
            }
        });
    }
</script>

</html>