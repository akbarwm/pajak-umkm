<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kategori Perbidang Usaha</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
</head>

<body>
    <?php

    session_start();
    include './connection.php';
    ?>
    <!-- Header Section Start-->
    <?php include 'konsultasi/navbar4.php'; ?>
    <!-- Header Menu End -->

    <!-- Breadcrumbs Start -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-wrap">
            <img src="images/bg.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title mb-17">Bidang Kosmetik</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li>Kategori Perbidang Usaha</li>
                                <li>Bidang Kosmetik</li>
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
                <div class="single-privacy mb-20">
                    <h2 class="privacy-title semi-bold">Bidang Kosmetik</h2>
                </div>
                <?php
                $query = "SELECT * FROM kategori_usaha";
                $stmt = $conn->query($query);

                // Menggunakan variabel untuk melacak nomor baris
                $rowNumber = 0;

                while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $rowNumber++;

                    // Menampilkan deskripsi hanya pada baris kedua
                    if ($rowNumber == 4) {
                        echo "<p>" . $data["deskripsi"] . "</p>";
                    }
                }
                ?>

            </div>
            <div class="row col-20 pt-50 md-pt-80">
                <div class="col-lg-4 col-md-6 sm-mb-30">
                    <div class="single-about no-bg-style top-border">
                        <div class="about-title">
                            <a href="view_pdf.php?nama=<?= $data['file_pdf'] ?>">
                                <h4 class="title mb-20">Unduh Materi PDF</h4>
                            </a>
                        </div>
                        <div class="about-desc">
                            <p class="desc-txt">Anda dapat mengunduh materi perpajakan sesuai dengan apa yang anda butuhkan untuk mengatasi permasalahan perpajakan anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Privacy Policy End -->
        <?php include './layout/footer.php'; ?>
</body>

</html>