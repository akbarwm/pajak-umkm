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
    $isi = mysqli_real_escape_string($db, $_POST['isi']);
    $kategori = $_POST['kategori'];
    $tanggal_upload = date('M d, Y', time());
    $namaFile = $_FILES['cover']['name'];
    $file_ext = pathinfo($namaFile, PATHINFO_EXTENSION);

    $namaUpload = time() . '.' . $file_ext;
    $namaSementara = $_FILES['cover']['tmp_name'];


    $sql = "UPDATE articles set judul = '$judul', isi='$isi', kategori='$kategori', cover ='$namaUpload' where id='$id'";
    $result = mysqli_query($db, $sql);

    if ($result) {
        // tentukan lokasi file akan dipindahkan
        $dirUpload = "tables/cover_berita/";

        $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaUpload);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['data' => "/user/demo1/list_berita.php", 'status' => 'sukses']);
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
<title>Edit Berita | Sudut Pajak </title>
<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">

<body>
    <?php include './layout/sidebar.php'; ?>
    <!-- Data Table start -->
    <div class="main-panel">
        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Edit Berita</h4>
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
                                $sql = "SELECT * FROM articles where id=" . "'" . $_GET['id'] . "'";
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
                                        <textarea name="isi" value="" type="text" class="form-control" id="isi" rows="3"><?= $row['isi'] ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Gambar *</label>
                                        <input name="cover" class="form-control" type="file" id="cover" accept="image/*">
                                    </div>
                                    <label for="texarea" class="form-label">Kategori</label>
                                    <div class="input-group mb-3"><br>

                                        <select name="kategori" class="custom-select" id="kategori">
                                            <option selected>Pilih...</option>
                                            <option value="Artikel" <?= $row['kategori'] == "Artikel" ? 'selected="selected"'  : '' ?>>Artikel</option>
                                            <option value="Blog" <?= $row['kategori'] == "Blog" ? 'selected="selected"'  : '' ?>>Blog</option>
                                        </select>
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="inputGroupSelect02">Pilihan</label>
                                        </div>
                                    </div>
                                    <button type="button" onclick="clicked1()" id="alert_demo_4" class="btn btn-primary">Submit</button>
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
        function clicked1() {

            data = {
                judul: $("#judul").val(),
                isi: $("#isi").val(),
                cover: $("#cover")[0].files,
                kategori: $("#kategori").val(),

            }
            var fd = new FormData();
            fd.append('judul', data.judul);
            fd.append('isi', data.isi);
            fd.append('cover', data.cover[0]);
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