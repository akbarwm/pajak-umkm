<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Detail Berita | Sudut Pajak </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
</head>

<body>
    <?php
    include './connection.php';
    ?>

    <?php
    $sql = "SELECT * FROM articles where id=" . "'" . $_GET['id'] . "'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    // var_dump($row);die;
    ?>

    <?php include 'konsultasi/navbar4.php'; ?>

    <!-- Breadcrumbs Start -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-wrap">
            <img src="images/bg.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title mb-17">Detail Artikel&Berita</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li>Detail Artikel&Berita</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->


    <!-- Blog Section Start -->
    <div id="neuron-blog" class="neuron-blog pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pr-0 md-mb-40 col-padding-md">
                    <div class="blog-part">
                        <div class="col-lg-12 padding-0">
                            <!-- Single Article Part Start -->
                            <div class="single-article-part box-shadow mb-60">
                                <div class="blog-img">
                                    <a href="#"><img src="./user/demo1/tables/cover_berita/<?= $row['cover'] ?>" alt=""></a>
                                </div>
                                <div class="single-blog ">
                                    <div class="blog-details pb-0">
                                        <ul class="blog-meta">
                                            <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i><?= $row['tanggal_upload'] ?></li>
                                            <li><i class="fa fa-user-o" aria-hidden="true"></i>Admin</li>
                                        </ul>
                                        <div class="blog-desc">
                                            <h2 class="blog-title sidebar-title"><a href="#"><?= $row['judul'] ?></a></h2>
                                            <div class="article-content">
                                                <p class="desc"><?= $row['isi'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pl-60 col-padding-md">
                    <div class="blog-sidebar">
                        <div class="sidebar-categories sidebar-single-part box-shadow mb-40">
                            <div class="sidebar-title">
                                <h3 class="title semi-bold mb-20">Categories</h3>
                            </div>
                            <ul>
                                <li><a href="#">Peraturan Pajak Pada UMKM</a></li>
                                <li><a href="#">Pajak Daerah Kota Batam</a></li>
                                <li><a href="#">Peraturan Pajak Daerah</a></li>
                                <li><a href="#">Peraturan Pajak Daerah</a></li>
                                <li><a href="#">Peraturan Pajak Daerah</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>