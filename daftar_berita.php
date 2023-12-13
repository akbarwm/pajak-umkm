<!DOCTYPE html>
<html lang="zxx">
<?php session_start(); ?>

<head>
    <title>Berita</title>
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
                        <h1 class="breadcrumbs-title mb-17">Berita</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li>Berita</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Berita Start-->
    <div class="sec-title text-center mb-50" id="berita"><br><br><br><br><br>
        <div class="container2">
            <?php
            $batas = 7;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $skip = $halaman == 1 ? 3 : (7 * ($halaman - 1)) + 3;

            $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT $batas OFFSET $skip";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($db, "select * from articles");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            foreach ($row as $idx => $r) {
            ?>
                <div class="artikel-<?= $idx + 1; ?>">
                    <div class="card2">
                        <img class="thumb" src="./user/demo1/tables/cover_berita/<?= $r['cover'] ?>" alt="">
                        <article>
                            <h1 style="text-align: left;"><?= $r['judul'] ?></h1><br><br>
                            <p style="text-align: left;"><?= substr($r['isi'], 0, 180) ?> <a href="detail_berita.php?id=<?= $r['id'] ?>">read more</a></p>
                            <ul class="blog-meta">
                                <li style="margin-right: 50px; color: #01a0f9; width:200px"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><?= $r['tanggal_upload'] ?> <i class="fa fa-user-o" aria-hidden="true"></i>Admin</li>
                            </ul>
                        </article>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

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
    <!-- Blog Section End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>