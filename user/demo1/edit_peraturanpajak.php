<?php
// Koneksi ke database (gunakan kode koneksi yang telah diberikan sebelumnya)
include '../config/koneksi.php';

// Periksa apakah parameter id telah diberikan melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data artikel dari database berdasarkan id
    $query = "SELECT * FROM peraturan_pajak WHERE id = :id";
    $statement = $koneksi->prepare($query);
    $statement->bindParam(':id', $id);
    $statement->execute();
    $pajak = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$pajak) {
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
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];

    // File upload handling
    $namaFile = $_FILES['file_pdf']['name'];
    $file_ext = pathinfo($namaFile, PATHINFO_EXTENSION);
    $namaUpload = $namaFile;
    $namaSementara = $_FILES['file_pdf']['tmp_name'];


    // Move the uploaded file to the specified directory
    $dirUpload = "tables/PDF/";
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaUpload);

    // Update data ke database
    $updateQuery = "UPDATE peraturan_pajak SET judul = :judul, deskripsi = :deskripsi, kategori = :kategori, file_pdf = :file_pdf WHERE id = :id";
    $updateStatement = $koneksi->prepare($updateQuery);
    $updateStatement->bindParam(':judul', $judul);
    $updateStatement->bindParam(':deskripsi', $deskripsi);
    $updateStatement->bindParam(':kategori', $kategori);

    // Check if a new file is uploaded
    if ($namaFile) {
        $updateStatement->bindParam(':file_pdf', $namaUpload);
    } else {
        // If no new file is uploaded, keep the existing file name
        $updateStatement->bindParam(':file_pdf', $pajak['file_pdf']);
    }

    $updateStatement->bindParam(':id', $id);

    if ($updateStatement->execute()) {
        // Check if the file upload is successful
        if ($terupload) {
            echo '<script>alert("Data berhasil diupdate!");</script>';
            echo '<script>window.location.href = "list_peraturanpajak.php";</script>';
            exit();
        } else {
            echo "Gagal menyimpan file";
        }
    } else {
        echo "Gagal mengupdate data";
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
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                        <input name="judul" value="<?php echo $pajak['judul']; ?>" type="text" class="form-control" id="judul" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"><?php echo $pajak['deskripsi']; ?></textarea>
                                    </div>
                                    <label for="texarea" class="form-label">Kategori</label>
                                    <div class="input-group mb-3"><br>

                                        <select name="kategori" class="custom-select" id="kategori">
                                            <option selected>Pilih...</option>
                                            <option value="Peraturan Pajak Daerah" <?= $pajak['kategori'] == "Peraturan Pajak Daerah" ? 'selected="selected"'  : '' ?>>Peraturan Pajak Daerah</option>
                                            <option value="Peraturan Pajak Pusat" <?= $pajak['kategori'] == "Peraturan Pajak Pusat" ? 'selected="selected"'  : '' ?>>Peraturan Pajak Pusat</option>
                                            <option value="Peraturan Pajak Daerah Kota Batam" <?= $pajak['kategori'] == "Peraturan Pajak Daerah Kota Batam" ? 'selected="selected"'  : '' ?>>Peraturan Pajak Daerah Kota Batam</option>
                                        </select>
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="inputGroupSelect02">Pilihan</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">File PDF</label>
                                        <input name="file_pdf" class="form-control" type="file" id="file_pdf" accept=".pdf">
                                    </div>
                                    <button type="submit" onclick="clicked8()" id="alert_demo_4" class="btn btn-primary">Submit</button>
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