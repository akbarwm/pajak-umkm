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
                        <h1 class="breadcrumbs-title mb-17">Forum Pajak</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li>Forum Pajak</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <h3>
            <?php
            if (isset($_SESSION['user'])) {
                echo $_SESSION['user']['nama'];
            }
            ?>
            Selamat Datang di Forum PHP
        </h3>
        <a class="btn btn-primary" href="tambah-topik.php" role="button">Tambah Topik</a>

        <?php
        if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            $pdo = require 'koneksi.php';
            $sql = "SELECT judul, tanggal, nama, email, topik.id, id_user FROM topik
        INNER JOIN pengguna ON topik.id_user = pengguna.id
        ORDER BY tanggal DESC";

            $query = $pdo->prepare($sql);
            $query->execute();
        ?>
            <h3 class="mt-5">Daftar Topik</h3>
            <hr />
            <?php
            while ($data = $query->fetch()) {
            ?>
                <div class="row">
                    <div class="col-auto">
                        <img src="//www.gravatar.com/avatar/<?php echo md5($data['email']); ?>?s=48&d=monsterid" class="rounded-circle" />
                    </div>
                    <figure class="col">
                        <blockquote class="blockquote">
                            <p>
                                <a href="lihat-topik.php?id=<?php echo $data['id']; ?>"><?php echo htmlentities($data['judul']); ?></a>
                            </p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Dari: <?php echo htmlentities($data['nama']); ?>
                            - <?php echo date('d M Y H:i', strtotime($data['tanggal'])); ?>
                            <?php
                            if ($_SESSION['user']['id'] == $data['id_user']) { ?>
                                - <a href="hapus-topik.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah Anda yakin menghapus topik ini?')" class="text-muted">Hapus</a>
                            <?php } ?>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <script src="boostrap/js/bootstrap.bundle.min.js"></script>

    <!-- Privacy Policy End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>