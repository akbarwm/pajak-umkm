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
    <div id="neuron-privacy" class="neuron-privacy pt-90 pb-90 md-pt-73 md-pb-75">
        <div class="container">
            <div class="privacy-part">
                <div class="single-privacy mb-50">
                    <h2 class="privacy-title semi-bold mb-20">Kategori Usaha</h2>
                    <p class="privacy-desc margin-0">Kategori usaha mengacu pada pengelompokan bisnis berdasarkan karakteristik umum, industri, atau jenis kegiatan yang mereka lakukan. Hal ini membantu dalam memahami dan mengklasifikasikan berbagai jenis usaha agar lebih mudah dianalisis, diatur, dan dibandingkan.</p>
                    <p class="privacy-desc margin-0">Kategori usaha umumnya melibatkan parameter seperti jenis produk atau layanan yang ditawarkan, model bisnis, ukuran perusahaan, dan sektor industri.</p>
                </div>
                <div class="single-privacy mb-50">
                    <h2 class="privacy-title semi-bold mb-20">Jenis Jenis Kategori Usaha</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3">
                    <div class="card" style="width: 100%;">
                        <img src="images/kuliner.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bidang Kuliner</h5>
                            <a href="kuliner.php" class="btn btn-primary mt-3">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 100%;">
                        <img src="images/pesyen.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bidang Fashion</h5>
                            <a href="fashion.php" class="btn btn-primary mt-3">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 100%;">
                        <img src="images/mobil.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bidang Otomotif</h5>
                            <a href="otomotif.php" class="btn btn-primary mt-3">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3">
                    <div class="card" style="width: 100%;">
                        <img src="images/agri.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bidang Agribisnis</h5>
                            <a href="agribisnis.php" class="btn btn-primary mt-3">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 100%;">
                        <img src="images/kosmetik.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bidang Kosmetik</h5>
                            <a href="kosmetik.php" class="btn btn-primary mt-3">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 100%;">
                        <img src="images/event-organizer.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bidang Event Organizer</h5>
                            <a href="event.php" class="btn btn-primary mt-3">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Privacy Policy End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>