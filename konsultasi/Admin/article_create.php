<?php
session_start();
include('layouts/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];

    $namaFile = $_FILES['cover']['name'];
    $file_ext = pathinfo($namaFile, PATHINFO_EXTENSION);

    $namaUpload = time() . '.' . $file_ext;
    $namaSementara = $_FILES['cover']['tmp_name'];

    $sql = "INSERT INTO articles (judul, isi, cover, kategori) VALUES ('$judul', '$isi', '$namaUpload', '$kategori')";
    $result = mysqli_query($db, $sql);

    if ($result) {
        // tentukan lokasi file akan dipindahkan
        $dirUpload = "cover_article/";

        // pindahkan file
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaUpload);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
            echo "Link: <a href='" . $dirUpload . $namaFile . "'>" . $namaFile . "</a>";
        } else {
            echo "Upload Gagal!";
        }
    }
}
?>


<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Article</h6>
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <input name="judul" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
                <textarea name="isi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Cover Picture *</label>
                <input name="cover" class="form-control" type="file" id="formFile">
            </div>
            <label for="texarea" class="form-label">Category *</label>
            <div class="input-group mb-3"><br>

                <select name="kategori" class="custom-select" id="inputGroupSelect02">
                    <option selected>Choose...</option>
                    <option value="Information">Information</option>
                    <option value="Blog">Blog</option>
                </select>
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">Options</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>



<?php
include('layouts/footer.php');
?>