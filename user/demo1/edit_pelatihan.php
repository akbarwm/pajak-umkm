<?php
error_reporting(false); session_start();
include('../config/session.php');
$id = $_SESSION['id_user'];
$sql = "SELECT * FROM `users` WHERE id='$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $isi = mysqli_real_escape_string($db, $_POST['isi']);
    $ytb = $_POST['ytb'];
    $pelatihan_id = $_GET['id'];

    $namaFile1 = $_FILES['cover']['name'];
    $file_ext1 = pathinfo($namaFile1, PATHINFO_EXTENSION);
    $namaUpload1 = time() . '.' . $file_ext1;
    $namaSementara1 = $_FILES['cover']['tmp_name'];

    $namaFile2 = $_FILES['file_pdf']['name'];
    $file_ext2 = pathinfo($namaFile2, PATHINFO_EXTENSION);
    $namaUpload2 = time() . '.' . $file_ext2;
    $namaSementara2 = $_FILES['file_pdf']['tmp_name'];

    $namaFile3 = $_FILES['file_ppt']['name'];
    $file_ext3 = pathinfo($namaFile3, PATHINFO_EXTENSION);
    $namaUpload3 = time() . '.' . $file_ext3;
    $namaSementara3 = $_FILES['file_ppt']['tmp_name'];


    $sql = "UPDATE pelatihan set judul= '$judul', isi='$isi', cover='$namaUpload1', file_pdf='$namaUpload2', file_ppt='$namaUpload3', ytb='$ytb' where id='$pelatihan_id'";
    $result = mysqli_query($db, $sql);

    if ($result) {
        // tentukan lokasi file akan dipindahkan
        $dirUpload1 = "tables/cover_berita/";
        $dirUpload2 = "tables/PDF/";
        $dirUpload3 = "tables/PPT/";

        $terupload1 = move_uploaded_file($namaSementara1, $dirUpload1 . $namaUpload1);
        $terupload2 = move_uploaded_file($namaSementara2, $dirUpload2 . $namaUpload2);
        $terupload3 = move_uploaded_file($namaSementara3, $dirUpload3 . $namaUpload3);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['data' => "/user/demo1/list_pelatihan.php", 'status' => 'sukses']);
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
<title>Tambah Peraturan | Sudut Pajak </title>
<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">

<body>
    <?php include './layout/sidebar.php'; ?>
    <!-- Data Table start -->
    <div class="main-panel">
        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Form Input Materi Pelatihan</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $sql = "SELECT * FROM pelatihan where id=" . "'" . $_GET['id'] . "'";
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
                                        <textarea name="isi" class="form-control" id="isi" rows="3"><?= $row['isi'] ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Gambar *</label>
                                        <input name="cover" class="form-control" type="file" id="cover" accept="image/*">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">File PDF*</label>
                                        <input name="file_pdf" class="form-control" type="file" id="file_pdf" accept=".pdf">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">File PPT*</label>
                                        <input name="file_ppt" class="form-control" type="file" id="file_ppt" accept=".pptx,ppt">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Link Youtobe</label>
                                        <input name="ytb" value="<?= $row['ytb'] ?>" type="text" class="form-control" id="ytb" placeholder="">
                                    </div>
                                    <button type="button" onclick="clicked9()" id="alert_demo_4" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include './layout/footer.php'; ?>
        </div>
    </div>
    <script>
        function clicked9() {
            data = {
                judul: $("#judul").val(),
                isi: $("#isi").val(),
                cover: $("#cover")[0].files,
                file_pdf: $("#file_pdf")[0].files,
                file_ppt: $("#file_ppt")[0].files,
                ytb: $("#ytb").val(),

            }
            var fd = new FormData();
            fd.append('judul', data.judul);
            fd.append('isi', data.isi);
            fd.append('cover', data.cover[0]);
            fd.append('file_pdf', data.file_pdf[0]);
            fd.append('file_ppt', data.file_ppt[0]);
            fd.append('ytb', data.ytb);
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