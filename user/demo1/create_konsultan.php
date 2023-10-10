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
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['data' => "http://localhost/sudutpajak/user/demo1/list_pelatihan.php", 'status' => 'sukses']);
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

                        <!-- Area Chart -->
                        <div class="card shadow mb-4">
                            <!-- <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Form</h6>
                            </div> -->

                            <div class="card-body">
                                <form action="konsultan_save.php" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="nama">Nama: <b class="text-danger">*</b> </label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email: <b class="text-danger">*</b> </label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password: <b class="text-danger">*</b> </label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="bio">Bio: <b class="text-danger">*</b> </label>
                                        <textarea class="form-control" id="bio" name="bio" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="profil_pic">Profil Picture: <b class="text-danger">*</b> </label>
                                        <input type="file" class="form-control" id="profil_pic" name="profil_pic" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="alumnus">Alumnus: <b class="text-danger">*</b> </label>
                                        <input type="text" class="form-control" id="alumnus" name="alumnus" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="bidang">Bidang: <b class="text-danger">*</b> </label>
                                        <input type="text" class="form-control" id="bidang" name="bidang" required>
                                    </div>

                                    <div class="form-group">

                                        <input type="text" class="form-control" id="status" value="Online" name="status" hidden>
                                    </div>

                                    <div class="form-group">
                                        <label for="pengalaman">Pengalaman: <b class="text-danger">*</b> </label>
                                        <input type="text" class="form-control" id="pengalaman" name="pengalaman" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenjang_karir">Jenjang Karir: <b class="text-danger">*</b> </label>
                                        <input type="text" class="form-control" id="jenjang_karir" name="jenjang_karir" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Tambah Konsultan</button>
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