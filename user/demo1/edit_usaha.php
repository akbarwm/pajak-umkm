<?php
// Koneksi ke database (gunakan kode koneksi yang telah diberikan sebelumnya)
include '../config/koneksi.php';

// Periksa apakah parameter id telah diberikan melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data materi dari database berdasarkan id
    $query = "SELECT * FROM kategori_usaha WHERE id = :id";
    $statement = $koneksi->prepare($query);
    $statement->bindParam(':id', $id);
    $statement->execute();
    $materi = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$materi) {
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

    // Mengelola file PDF yang diunggah
    if (!empty($_FILES['file_pdf']['name'])) {
        $namaFilePdf = $_FILES['file_pdf']['name'];
        $lokasiFilePdf = $_FILES['file_pdf']['tmp_name'];

        // Tentukan folder penyimpanan PDF
        $folderUploadPdf = "tables/PDF/";

        // Buat path penyimpanan file PDF
        $lokasiSimpanPdf = $folderUploadPdf . $namaFilePdf;

        // Proses penyimpanan file PDF
        if (move_uploaded_file($lokasiFilePdf, $lokasiSimpanPdf)) {
            // Update data ke database dengan file PDF
            $updateQueryPdf = "UPDATE kategori_usaha SET judul = :judul, deskripsi = :deskripsi, file_pdf = :file_pdf WHERE id = :id";
            $updateStatementPdf = $koneksi->prepare($updateQueryPdf);
            $updateStatementPdf->bindParam(':judul', $judul);
            $updateStatementPdf->bindParam(':deskripsi', $deskripsi);
            $updateStatementPdf->bindParam(':file_pdf', $namaFilePdf);
            $updateStatementPdf->bindParam(':id', $id);

            if ($updateStatementPdf->execute()) {
                echo '<script>alert("Data berhasil di update!");</script>';
                echo '<script>window.location.href = "list_usaha.php";</script>';
                exit();
            } else {
                echo "Gagal mengupdate data: " . $updateStatementPdf->errorInfo()[2];
            }
        } else {
            echo "Gagal menyimpan file PDF: " . $_FILES['file_pdf']['error'];
        }
    } else {
        // Update data ke database tanpa mengganti file PDF
        $updateQuery = "UPDATE kategori_usaha SET judul = :judul, deskripsi = :deskripsi WHERE id = :id";
        $updateStatement = $koneksi->prepare($updateQuery);
        $updateStatement->bindParam(':judul', $judul);
        $updateStatement->bindParam(':deskripsi', $deskripsi);
        $updateStatement->bindParam(':id', $id);

        if ($updateStatement->execute()) {
            echo '<script>alert("Data berhasil diupdate!");</script>';
            echo '<script>window.location.href = "list_usaha.php";</script>';
            exit();
        } else {
            echo "Gagal mengupdate data: " . $updateStatement->errorInfo()[2];
        }
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
                                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                        <input name="judul" value="<?php echo $materi['judul']; ?>" type="text" class="form-control" id="judul" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"><?php echo $materi['deskripsi']; ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">File PDF</label>
                                        <input name="file_pdf" class="form-control" type="file" id="file_pdf" accept=".pdf">
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
</body>