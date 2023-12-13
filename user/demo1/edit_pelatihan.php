<?php
// Koneksi ke database (gunakan kode koneksi yang telah diberikan sebelumnya)
include '../config/koneksi.php';

// Periksa apakah parameter id telah diberikan melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data materi dari database berdasarkan id
    $query = "SELECT * FROM pelatihan WHERE id = :id";
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
    $isi = $_POST['isi'];
    $ytb = $_POST['ytb'];

    // Mengelola file cover yang diunggah
    if (isset($_FILES['cover']['name']) && $_FILES['cover']['name']) {
        $namaFile = $_FILES['cover']['name'];
        $lokasiFile = $_FILES['cover']['tmp_name'];

        // Tentukan folder penyimpanan
        $folderUpload = "tables/cover_berita/";

        // Buat path penyimpanan file
        $lokasiSimpan = $folderUpload . $namaFile;

        // Proses penyimpanan file
        if (move_uploaded_file($lokasiFile, $lokasiSimpan)) {
            // Update data ke database dengan file
            $updateQuery = "UPDATE pelatihan SET judul = :judul, isi = :isi, cover = :cover, ytb = :ytb WHERE id = :id";
            $updateStatement = $koneksi->prepare($updateQuery);
            $updateStatement->bindParam(':judul', $judul);
            $updateStatement->bindParam(':isi', $isi);
            $updateStatement->bindParam(':cover', $namaFile);
            $updateStatement->bindParam(':ytb', $ytb);
            $updateStatement->bindParam(':id', $id);

            if ($updateStatement->execute()) {
                echo '<script>alert("Data berhasil diupdate!");</script>';
                echo '<script>window.location.href = "list_pelatihan.php";</script>';
                exit();
            } else {
                echo "Gagal mengupdate data";
            }
        } else {
            echo "Gagal menyimpan file";
        }
    } else {
        // Update data ke database tanpa file
        $updateQuery = "UPDATE pelatihan SET judul = :judul, isi = :isi, ytb = :ytb WHERE id = :id";
        $updateStatement = $koneksi->prepare($updateQuery);
        $updateStatement->bindParam(':judul', $judul);
        $updateStatement->bindParam(':isi', $isi);
        $updateStatement->bindParam(':ytb', $ytb);
        $updateStatement->bindParam(':id', $id);

        if ($updateStatement->execute()) {
            echo '<script>alert("Data berhasil diupdate!");</script>';
            echo '<script>window.location.href = "list_pelatihan.php";</script>';
            exit();
        } else {
            echo "Gagal mengupdate data";
        }
    }

    // Mengelola file PDF yang diunggah
    if (isset($_FILES['file_pdf']['name']) && $_FILES['file_pdf']['name']) {
        $namaFilePdf = $_FILES['file_pdf']['name'];
        $lokasiFilePdf = $_FILES['file_pdf']['tmp_name'];

        // Tentukan folder penyimpanan PDF
        $folderUploadPdf = "tables/PDF/";

        // Buat path penyimpanan file PDF
        $lokasiSimpanPdf = $folderUploadPdf . $namaFilePdf;

        // Proses penyimpanan file PDF
        if (move_uploaded_file($lokasiFilePdf, $lokasiSimpanPdf)) {
            // Update data ke database dengan file PDF
            $updateQueryPdf = "UPDATE pelatihan SET file_pdf = :file_pdf WHERE id = :id";
            $updateStatementPdf = $koneksi->prepare($updateQueryPdf);
            $updateStatementPdf->bindParam(':file_pdf', $namaFilePdf);
            $updateStatementPdf->bindParam(':id', $id);

            if ($updateStatementPdf->execute()) {
                echo '<script>alert("File PDF berhasil diupdate!");</script>';
            } else {
                echo "Gagal mengupdate file PDF";
            }
        } else {
            echo "Gagal menyimpan file PDF";
        }
    }

    // Mengelola file PPT yang diunggah
    if (isset($_FILES['file_ppt']['name']) && $_FILES['file_ppt']['name']) {
        $namaFilePpt = $_FILES['file_ppt']['name'];
        $lokasiFilePpt = $_FILES['file_ppt']['tmp_name'];

        // Tentukan folder penyimpanan PPT
        $folderUploadPpt = "tables/PPT/";

        // Buat path penyimpanan file PPT
        $lokasiSimpanPpt = $folderUploadPpt . $namaFilePpt;

        // Proses penyimpanan file PPT
        if (move_uploaded_file($lokasiFilePpt, $lokasiSimpanPpt)) {
            // Update data ke database dengan file PPT
            $updateQueryPpt = "UPDATE pelatihan SET file_ppt = :file_ppt WHERE id = :id";
            $updateStatementPpt = $koneksi->prepare($updateQueryPpt);
            $updateStatementPpt->bindParam(':file_ppt', $namaFilePpt);
            $updateStatementPpt->bindParam(':id', $id);

            if ($updateStatementPpt->execute()) {
                echo '<script>alert("File PPT berhasil diupdate!");</script>';
            } else {
                echo "Gagal mengupdate file PPT";
            }
        } else {
            echo "Gagal menyimpan file PPT";
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
                                        <textarea name="isi" class="form-control" id="isi" rows="3"><?php echo $materi['isi']; ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Gambar </label>
                                        <input name="cover" class="form-control" type="file" id="cover" accept="image/*">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">File PDF</label>
                                        <input name="file_pdf" class="form-control" type="file" id="file_pdf" accept=".pdf">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">File PPT</label>
                                        <input name="file_ppt" class="form-control" type="file" id="file_ppt" accept=".pdf">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Link Youtobe</label>
                                        <input name="ytb" value="<?php echo $materi['ytb']; ?>" type="text" class="form-control" id="ytb" placeholder="">
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