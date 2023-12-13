<?php
error_reporting(false);
session_start();
include('../config/session.php');
$id = $_SESSION['id_user'];
$sql = "SELECT * FROM `users` WHERE id='$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $isi = mysqli_real_escape_string($db, $_POST['isi']);
    $ytb = $_POST['ytb'];


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


    $sql = "INSERT INTO pelatihan (judul, isi, cover, file_pdf, file_ppt, ytb) VALUES ('$judul', '$isi', '$namaUpload1', '$namaUpload2', '$namaUpload3', '$ytb')";
    $result = mysqli_query($db, $sql);

    if ($result) {
        // tentukan lokasi file akan dipindahkan
        $dirUpload1 = "tables/cover_berita/";
        $dirUpload2 = "tables/PDF/";
        $dirUpload3 = "tables/PPT/";

        $terupload1 = move_uploaded_file($namaSementara1, $dirUpload1 . $namaUpload1);
        $terupload2 = move_uploaded_file($namaSementara2, $dirUpload2 . $namaUpload2);
        $terupload3 = move_uploaded_file($namaSementara3, $dirUpload3 . $namaUpload3);

        if ($terupload1 && $terupload2 && $terupload3) {
            echo '<script>alert("Data berhasil ditambahkan!");</script>';
            echo '<script>window.location.href = "list_pelatihan.php";</script>';
            exit();  // Pastikan exit() ada setelah redireksi
        } else {
            echo json_encode(['data' => "Upload gagal", 'status' => 'error']);
        }
    } else {
        echo json_encode(['data' => mysqli_error($db), 'status' => 'error']);
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
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Judul <b class="text-danger">*</b> </label>
                                        <input name="judul" type="text" class="form-control" id="judul" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi <b class="text-danger">*</b> </label>
                                        <textarea name="isi" class="form-control" id="isi" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Gambar <b class="text-danger">*</b> </label>
                                        <input name="cover" class="form-control" type="file" id="cover" accept="image/*">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">File PDF <b class="text-danger">*</b> </label>
                                        <input name="file_pdf" class="form-control" type="file" id="file_pdf" accept=".pdf">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">File PPT <b class="text-danger">*</b> </label>
                                        <input name="file_ppt" class="form-control" type="file" id="file_ppt" accept=".pdf">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Link Youtobe <b class="text-danger">*</b> </label>
                                        <input name="ytb" type="text" class="form-control" id="ytb" placeholder="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
        function clicked() {
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