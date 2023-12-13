<!DOCTYPE html>
<html lang="zxx">
<?php session_start(); ?>

<head>
    <title>Materi Pelatihan | Sudut Pajak </title>
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
                        <h1 class="breadcrumbs-title mb-17">Materi Pelatihan atau Sertifikasi</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li>Pelatihan atau Sertifikasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start-->
    <div id="neuron-about" class="neuron-about white-bg pt-90 pb-90 md-pt-80 md-pb-70">
        <div class="container">
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM pelatihan WHERE id = $id";
            $query = mysqli_query($db, $sql);
            $r = mysqli_fetch_assoc($query);
            ?>
            <div class="sec-title text-center mb-45">
                <h2 class="title extra-none title-color mb-0">Mengapa kita harus mengikuti <br>Pelatihan dan Sertifikasi</h2><br>
                <p>Jadilah ahli pajak dan memanfaatkan kesempatan ini untuk mengembangkan karier anda.<br> Ikuti pelatihan dan sertifikasi pajak yang befokus pada peraturan perpajakan yang berlaku Saat ini. Pemahaman mendalam tentang dunia perpajakan dan strategi manajemen resiko pajak</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 padding-0 order-last md-mb-30 col-padding-md">
                </div>
            </div>
            <div class="row col-20 pt-50 md-pt-80">
                <div class="col-lg-4 col-md-6 sm-mb-30">
                    <div class="single-about no-bg-style top-border">
                        <div class="about-title">
                            <a href="view_pdf.php?nama=<?= $r['file_pdf'] ?>">
                                <h4 class="title mb-20">Unduh Materi PDF</h4>
                            </a>
                        </div>
                        <div class="about-desc">
                            <p class="desc-txt">Anda dapat mengunduh materi perpajakan sesuai dengan apa yang anda butuhkan untuk mengatasi permasalahan perpajakan anda</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-about no-bg-style top-border">
                        <div class="about-title">
                            <a href="viewer_ppt.php?nama=<?= $r['file_ppt'] ?>">
                                <h4 class="title mb-20">Unduh Materi PPT</h4>
                            </a>
                        </div>
                        <div class="about-desc">
                            <p class="desc-txt">Anda dapat mengunduh materi perpajakan sesuai dengan apa yang anda butuhkan untuk mengatasi permasalahan perpajakan anda</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 hidden-md">
                    <div class="single-about no-bg-style top-border">
                        <div class="about-title">
                            <iframe name="ytb" src="<?= $r['ytb'] ?>">
                            </iframe>
                            <h4 class="title mb-20">Akses Link pembelajaran</h4>
                        </div>
                        <div class="about-desc">
                            <p class="desc-txt">Anda dapat mengunduh materi perpajakan sesuai dengan apa yang anda butuhkan untuk mengatasi permasalahan perpajakan anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .container end -->
    </div>
    <!-- About Section End-->

    <?php include './layout/footer.php'; ?>
</body>

</html>