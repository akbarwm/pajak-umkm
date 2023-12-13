<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <title>Peraturan Pajak Kota Batam</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
</head>

<body>
    <?php
    include './connection.php';
    ?>
    <!-- Header Menu Start -->
    <?php include 'konsultasi/navbar4.php'; ?>
    <!-- Header Menu End -->

    <!-- Breadcrumbs Start -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-wrap">
            <img src="images/bg.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title mb-17">Peraturan Pajak Daerah Kota Batam</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li>Peraturan Pajak Daerah Kota Batam</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Privacy Policy Start -->
    <div id="neuron-privacy" class="neuron-privacy pt-90 pb-90 md-pt-73 md-pb-75">
        <div class="container">
            <div class="privacy-part">
                <div class="single-privacy mb-50">

                    <h2 class="privacy-title semi-bold mb-20">Peraturan Pajak Daerah Kota Batam</h2>
                    <p class="privacy-desc">Peraturan pajak daerah Kota Batam adalah peraturan yang dikeluarkan oleh Pemerintah Kota Batam untuk mengatur pungutan, penyetoran, penggunaan, dan pengawasan pajak di wilayah Kota Batam. Kota Batam merupakan salah satu kota di Indonesia yang memiliki otonomi khusus dalam mengelola urusan pemerintahan, termasuk dalam hal perpajakan.</p>
                    <?php
                    $batas = 10;
                    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                    $previous = $halaman - 1;
                    $next = $halaman + 1;

                    $data = mysqli_query($db, "select * from peraturan_pajak where kategori='Peraturan Pajak Daerah Kota Batam'");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);
                    //  var_dump("select * peraturan_pajak  LIMIT $batas OFFSET $halaman_awal");die;
                    $data_pegawai = mysqli_query($db, "select * FROM peraturan_pajak  where kategori='Peraturan Pajak Daerah Kota Batam' LIMIT $batas OFFSET $halaman_awal");
                    $nomor = $halaman_awal + 1;
                    $idx = $halaman_awal;

                    while ($r = mysqli_fetch_array($data_pegawai)) {
                    ?>
                        <h3 class="privacy-list-title semi-bold mb-20"><a style="color:#01a0f9;" href="view_pdf.php?nama=<?= $r['file_pdf'] ?>"><span><?= $idx += 1 ?>. </span><?= $r['judul'] ?></a></h3>
                        <p class="privacy-desc"><?= $r['deskripsi'] ?></p>

                    <?php
                    }
                    ?>
                </div>
                <div style="display: flex; justify-content: flex-end">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" <?php if ($halaman > 1) {
                                                                    echo "href='?halaman=$previous'";
                                                                } ?>>Previous</a>
                                    </li>
                                    <?php
                                    for ($x = 1; $x <= $total_halaman; $x++) {
                                    ?>
                                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                    <?php
                                    }
                                    ?>
                                    <li class="page-item">
                                        <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                                    echo "href='?halaman=$next'";
                                                                } ?>>Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Privacy Policy End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>