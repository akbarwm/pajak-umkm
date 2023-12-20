<!DOCTYPE html>
<html lang="en">

<head>
    <title>Layanan Kami</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <style>
        /* Custom CSS untuk mengatur tinggi kartu */
        .single-about {
            height: 300px;
        }

        .single-about>p {
            color: black;
        }
    </style>
</head>

<body>
    <?php

    session_start();
    // include './connection.php';
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
                        <h1 class="breadcrumbs-title mb-17">Kategori Perbidang Usaha</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li>Kategori Perbidang Usaha</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Privacy Policy Start -->
    <div class="neuron-about gray-bg pt-90 pb-100 md-pt-70 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-45">
                <h2 class="title extra-none title-color mb-0">Layanan Kami</h2>
            </div>
            <div class="row col-20 d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 mb-40">
                    <a href="../PBL-25/konsultasi/index.php">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Konsultasi</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Layanan konseling perpajakan yang dilaksanakan oleh expert perpajakan yang dimiliki oleh Sudut pajak sesuai dengan kebutuhan Wajib Pajak yang dibantu.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <a href="pelatihan_sertifikasi.php">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Pelatihan atau Sertifikasi</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Memberikan pelatihan di bidang perpajakan seperti brevet pajak dan pelatihan lainnya terkait perpajakan serta memberikan sertifikasi di bidang perpajakan.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <a href="daftar_berita.php">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Berita</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Memberikan informasi terkait peristiwa-peristiwa yang berkaitan dengan perpajakan.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 md-mb-40">
                    <a href="kategoriusaha.php">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Kategori Perbidang Usaha</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Memberikan layanan edukasi perpajakan yang terkait bidang-bidang usaha tertentu secara spesifik untuk masing-masing bidang usaha.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 md-mb-40">
                    <a href="forum.php">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Forum Pajak</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Tempat untuk bertanya dan berbagi ilmu di bidang perpajakan.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div><!-- .container end -->
    </div>

    <!-- Privacy Policy End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>