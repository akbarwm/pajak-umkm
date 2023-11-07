<?php
error_reporting(false);
session_start();
include('../config/session.php');
$id = $_SESSION['id_user'];
$sql = "SELECT * FROM `users` WHERE id='$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi data yang masuk
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($db, $_POST['deskripsi']);

    // Update data kategori usaha
    $sql = "UPDATE kategori_usaha SET judul = '$judul', deskripsi = '$deskripsi' WHERE id = '$id'";
    $result = mysqli_query($db, $sql);

    if ($result) {
        // Handle kesuksesan
        header("Location: list_usaha.php"); // Arahkan ke halaman list_usaha.php
        exit(); // Pastikan script berhenti di sini
    } else {
        // Handle kegagalan
        echo "Gagal mengupdate data kategori usaha: " . mysqli_error($db);
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
                                $sql = "SELECT * FROM kategori_usaha where id=" . "'" . $_GET['id'] . "'";
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
                                        <textarea name="isi" value="" type="text" class="form-control" id="isi" rows="3"><?= $row['deskripsi'] ?></textarea>
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
                deskripsi: $("#deskripsi").val(),

            }
            var fd = new FormData();
            fd.append('judul', data.judul);
            fd.append('deskripsi', data.deskripsi);
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