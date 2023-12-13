<?php
// Koneksi ke database (gunakan kode koneksi yang telah diberikan sebelumnya)
include '../config/koneksi.php';

// Periksa apakah parameter id telah diberikan melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data kategori_usaha dari database berdasarkan id
    $query = "SELECT * FROM articles WHERE id = :id";
    $statement = $koneksi->prepare($query);
    $statement->bindParam(':id', $id);
    $statement->execute();
    $articles = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$articles) {
        echo "Data tidak ditemukan.";
        exit();
    }
} else {
    echo "ID tidak diberikan.";
    exit();
}

// Proses form jika ada data yang dikirimkan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['isi'];
    $kategori = $_POST['kategori'];
    $tanggal_upload = date('M d, Y', time());

    // Mengelola file PDF yang diunggah
    if (isset($_FILES['cover']['name']) && $_FILES['cover']['name']) {
        $namaFile = $_FILES['cover']['name'];
        $lokasiFile = $_FILES['cover']['tmp_name'];
        $ukuranFile = $_FILES['cover']['size']; // Ukuran file dalam byte

        // Batas maksimal ukuran file (5MB)
        $batasUkuran = 5 * 1024 * 1024;

        // Pengecekan ukuran file
        if ($ukuranFile <= $batasUkuran) {
            // Tentukan folder penyimpanan
            $folderUpload = "tables/cover_berita/";

            // Buat path penyimpanan file
            $lokasiSimpan = $folderUpload . $namaFile;

            // Proses penyimpanan file
            if (move_uploaded_file($lokasiFile, $lokasiSimpan)) {
                // Update data ke database dengan file
                $updateQuery = "UPDATE articles SET judul = :judul, isi = :isi, cover = :cover, kategori = :kategori, tanggal_upload = :tanggal_upload WHERE id = :id";
                $updateStatement = $koneksi->prepare($updateQuery);
                $updateStatement->bindParam(':judul', $judul);
                $updateStatement->bindParam(':isi', $deskripsi);
                $updateStatement->bindParam(':cover', $namaFile);
                $updateStatement->bindParam(':kategori', $kategori);
                $updateStatement->bindParam(':tanggal_upload', $tanggal_upload);
                $updateStatement->bindParam(':id', $id);

                if ($updateStatement->execute()) {
                    echo '<script>alert("Data berhasil diupdate!");</script>';
                    echo '<script>window.location.href = "list_berita.php";</script>';
                    exit();
                } else {
                    echo "Gagal mengupdate data";
                }
            } else {
                echo "Gagal menyimpan file";
            }
        } else {
            echo "Ukuran file melebihi batas maksimum (5 MB).";
        }
    } else {
        // Update data ke database tanpa file
        $updateQuery = "UPDATE articles SET judul = :judul, isi = :isi, kategori = :kategori, tanggal_upload = :tanggal_upload WHERE id = :id";
        $updateStatement = $koneksi->prepare($updateQuery);
        $updateStatement->bindParam(':judul', $judul);
        $updateStatement->bindParam(':isi', $deskripsi);
        $updateStatement->bindParam(':kategori', $kategori);
        $updateStatement->bindParam(':tanggal_upload', $tanggal_upload);
        $updateStatement->bindParam(':id', $id);

        if ($updateStatement->execute()) {
            echo '<script>alert("Data berhasil diupdate!");</script>';
            echo '<script>window.location.href = "list_berita.php";</script>';
            exit();
        } else {
            echo "Gagal mengupdate data";
        }
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
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                        <input name="judul" value="<?php echo $articles['judul']; ?>" type="text" class="form-control" id="judul" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                        <textarea name="isi" value="" type="text" class="form-control" id="isi" rows="3"><?php echo $articles['isi']; ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Gambar *</label>
                                        <input name="cover" class="form-control" type="file" id="cover" accept="image/*">
                                    </div>
                                    <label for="texarea" class="form-label">Kategori</label>
                                    <div class="input-group mb-3"><br>

                                        <select name="kategori" class="custom-select" id="kategori">
                                            <option selected>Pilih...</option>
                                            <option value="Artikel">Artikel</option>
                                            <option value="Blog">Blog</option>
                                        </select>
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="inputGroupSelect02">Pilihan</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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