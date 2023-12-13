<?php
// Koneksi ke database (gunakan kode koneksi yang telah diberikan sebelumnya)
include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['isi'];
    $kategori = $_POST['kategori'];
    $tanggal_upload = date('M d, Y', time());

    // Mengelola file PDF yang diunggah
    if ($_FILES['cover']['name']) {
        $namaFile = $_FILES['cover']['name'];
        $lokasiFile = $_FILES['cover']['tmp_name'];

        // Tentukan folder penyimpanan
        $folderUpload = "tables/cover_berita/";

        // Buat path penyimpanan file
        $lokasiSimpan = $folderUpload . $namaFile;

        // Proses penyimpanan file
        if (move_uploaded_file($lokasiFile, $lokasiSimpan)) {
            // Tambahkan data ke database
            $koneksi = new mysqli("localhost", "root", "", "pajak2");

            if ($koneksi->connect_error) {
                die("Koneksi Gagal: " . $koneksi->connect_error);
            }

            // Escape string untuk menghindari SQL Injection
            $judul = $koneksi->real_escape_string($judul);
            $deskripsi = $koneksi->real_escape_string($deskripsi);
            $namaFile = $koneksi->real_escape_string($namaFile);
            $kategori = $koneksi->real_escape_string($kategori);
            $tanggal_upload = $koneksi->real_escape_string($tanggal_upload);

            // Baca isi file sebagai blob
            $fileContent = file_get_contents($lokasiSimpan);
            $fileContent = $koneksi->real_escape_string($fileContent);

            // Query untuk menambahkan data
            $insertQuery = "INSERT INTO articles (judul, isi, kategori, tanggal_upload, cover) VALUES ('$judul', '$deskripsi', '$kategori', '$tanggal_upload', '$namaFile')";

            // Eksekusi query
            $result = $koneksi->query($insertQuery);

            if ($result) {
                echo '<script>alert("Data berhasil ditambahkan!");</script>';
                echo '<script>window.location.href = "list_berita.php";</script>';
                exit();
            } else {
                echo "Gagal menambahkan data: " . $koneksi->error;
            }

            // Tutup koneksi
            $koneksi->close();
        } else {
            echo "Gagal menyimpan file";
        }
    } else {
        echo "File PDF tidak boleh kosong";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Input Berita | Sudut Pajak </title>
<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">

<body>
    <?php include './layout/sidebar.php'; ?>
    <!-- Data Table start -->
    <div class="main-panel">
        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Form Input Berita</h4>
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
                                    <label for="texarea" class="form-label">Kategori <b class="text-danger">*</b> </label>
                                    <div class="input-group mb-3"><br>
                                        <select name="kategori" class="custom-select" id="kategori">
                                            <option selected>Pilih...</option>
                                            <option value="Artikel">Artikel</option>
                                            <option value="Blog">Blog</option>
                                        </select>
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="inputGroupSelect02">Pilihan <b class="text-danger">*</b> </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
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
        function clicked() {
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