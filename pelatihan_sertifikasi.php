<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <title>Pelatihan Atau Sertifikasi</title>
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
                        <h1 class="breadcrumbs-title mb-17">Pelatihan Atau Sertifikasi</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li>Pelatihan Atau Sertifikasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->


    <!-- About Section Start-->
    <div id="neuron-about" class="neuron-about about-bg pb-100 md-pb-80">
        <div class="container">
            <?php
            $batas = 10;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $skip = $batas * ($halaman - 1);

            $sql = "SELECT * FROM pelatihan ORDER BY id DESC LIMIT $batas OFFSET $skip";
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($db, "select * from pelatihan");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);
            $nomor = $halaman_awal + 1;
            $idx = $halaman_awal;

            $idx = 1;
            foreach ($row as $r) {
            ?>
                <div class="row align-items-center pb-100 md-pb-150">
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 padding-0 md-pb-30 col-padding-md order-last">
                        <div class="neuron-about-img-part">
                            <div class="about-img mr-20">

                            </div>
                            <div class="about-img">
                                <img class="thumb" src="./user/demo1/tables/cover_berita/<?= $r['cover'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pr-60 col-padding-md">
                        <div class="sec-title mb-40">
                            <h2 class="title2 mb-15"><?= $r['judul'] ?></h2>
                            <p><?= $r['isi'] ?></p>
                        </div>
                        <div class="about-btn">
                            <a class="readon style2 radius" href="materi_pelatihan.php?id=<?= $r['id']; ?>">Mulai Sekarang</a>
                        </div>
                    </div>
                </div>
            <?php
                $idx++;
            }
            ?>
        </div><!-- .container end -->
        <div style="display: flex; justify-content: flex-end; margin-right: 100px; margin-bottom: 100px; margin-top: 70px ">
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
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- About Section End-->
    <?php include './layout/footer.php'; ?>
</body>

</html>