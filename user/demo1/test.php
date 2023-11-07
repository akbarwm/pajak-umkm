<?php
// Pastikan Anda telah mengatur koneksi database sebelumnya
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['judul']) && isset($_POST['deskripsi'])) {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];

        // Lakukan validasi data jika diperlukan

        // Update data usaha ke dalam tabel kategori_usaha
        $query = "UPDATE kategori_usaha SET judul = ?, deskripsi = ? WHERE id = ?";
        $stmt = $koneksi->prepare($query);
        $stmt->bind_param("ssi", $judul, $deskripsi, $id);

        if ($stmt->execute()) {
            // Data berhasil diubah, arahkan pengguna ke halaman lain atau tampilkan pesan sukses
            header('Location: halaman_lain.php');
            exit();
        } else {
            // Kesalahan dalam proses pengubahan data
            echo "Gagal mengubah data usaha.";
        }
    }
}

// Ambil data usaha yang akan diubah
if (isset($_GET['id'])) {
    $id_usaha = $_GET['id'];

    // Query untuk mendapatkan data usaha berdasarkan id_usaha
    $query = "SELECT * FROM kategori_usaha WHERE id = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("i", $id_usaha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $judul_awal = $row['judul'];
        $deskripsi_awal = $row['deskripsi'];
    } else {
        // Tidak ada data usaha dengan id_usaha yang diberikan
        echo "Data usaha tidak ditemukan.";
        exit();
    }
} else {
    // Parameter id_usaha tidak diberikan
    echo "Parameter id_usaha tidak valid.";
    exit();
}

$koneksi->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Usaha</title>
</head>

<body>
    <h1>Edit Usaha</h1>
    <form method="post" action="edit_usaha.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" value="<?php echo $judul_awal; ?>"><br>
        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi"><?php echo $deskripsi_awal; ?></textarea><br>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>

</html>