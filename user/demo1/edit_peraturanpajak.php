<?php
error_reporting(false); session_start();
include('../config/session.php');
$id = $_SESSION['id_user'];
$sql = "SELECT * FROM `users` WHERE id='$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
    $judul =  mysqli_real_escape_string($db, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($db, $_POST['deskripsi']);
    $kategori = $_POST['kategori'];

    $namaFile = $_FILES['file']['name'];
    $file_ext = pathinfo($namaFile, PATHINFO_EXTENSION);

    $namaUpload = time() . '.' . $file_ext;
    $namaSementara = $_FILES['file']['tmp_name'];


    $sql = "UPDATE peraturan_pajak set judul = '$judul', deskripsi= '$deskripsi', kategori= '$kategori', file= '$namaUpload' where id=' $id'";
    $result = mysqli_query($db, $sql);
    // header("location: list_peraturanpajak.php");
    if ($result) {
        // tentukan lokasi file akan dipindahkan
        $dirUpload = "tables/PDF/";

        $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaUpload);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['data' => "/user/demo1/list_peraturanpajak.php", 'status' => 'sukses']);
        return;
        if ($terupload) {
        } else {
            // header('Content-Type: application/json; charset=utf-8');
            echo json_encode(['data' => "upload gagal", 'status' => 'error']);
            return;
        }
    } else {
        // echo $sql;
        echo json_encode(['data' => mysqli_error($db), 'status' => 'error']);
        return;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Edit Peraturan | Sudut Pajak </title>
<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">

<body>
    <?php include './layout/sidebar.php'; ?>
    <!-- Data Table start -->
    <div class="main-panel">
        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Edit Peraturan Pajak</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="index.php">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $sql = "SELECT * FROM peraturan_pajak where id=" . "'" . $_GET['id'] . "'";
                                $result = mysqli_query($db, $sql);
                                $row = mysqli_fetch_assoc($result);
                                // var_dump($row);die;
                                ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                        <input name="judul" value="<?= $row['judul'] ?>" type="text" class="form-control" id="judul" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" value="<?= $row['deskripsi'] ?>" class="form-control" id="deskripsi" rows="3"><?= $row['deskripsi'] ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">File *</label>
                                        <input name="file" class="form-control" type="file" id="file" accept=".pdf">
                                    </div>
                                    <label for="texarea" class="form-label">Kategori</label>
                                    <div class="input-group mb-3"><br>

                                        <select name="kategori" class="custom-select" id="kategori">
                                            <option selected>Pilih...</option>
                                            <option value="pajak daerah" <?= $row['kategori'] == "pajak daerah" ? 'selected="selected"'  : '' ?>>Peraturan Pajak Daerah</option>
                                            <option value="pajak daerah batam" <?= $row['kategori'] == "pajak daerah batam" ? 'selected="selected"'  : '' ?>>Peraturan Pajak Daerah Kota Batam</option>
                                        </select>
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="inputGroupSelect02">Pilihan</label>
                                        </div>
                                    </div>
                                    <button type="button" onclick="clicked8()" id="alert_demo_4" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <?php include './layout/footer.php'; ?>
    <script>
        function clicked8() {
            data = {
                judul: $("#judul").val(),
                deskripsi: $("#deskripsi").val(),
                file: $("#file")[0].files,
                kategori: $("#kategori").val(),

            }
            var fd = new FormData();
            fd.append('judul', data.judul);
            fd.append('deskripsi', data.deskripsi);
            fd.append('file', data.file[0]);
            fd.append('kategori', data.kategori);
            console.log(fd);
            // console.log(window.location.href)
            $.ajax({
                // headers: {
                //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                // },
                type: "POST",
                processData: false,
                contentType: false,
                cache: false,
                data: fd,
                enctype: 'multipart/form-data',
                url: window.location.href,
                success: function(res) {
                    if (res.status === 'error') {
                        Swal.fire({
                            title: res.data,
                            icon: 'error',
                            confirmButtonColor: '#008000',
                        })
                        return;
                    }
                    data = res;
                    Swal.fire({
                        title: 'Berhasil',
                        icon: 'success',
                        confirmButtonColor: '#008000',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = data.data;
                        }
                    })
                }
            });
        }
    </script>