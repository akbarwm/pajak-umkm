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
        <?php
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $pdo = require 'koneksi.php';
            $sql = "SELECT topik.*, pengguna.nama, pengguna.email FROM topik
        INNER JOIN pengguna ON topik.id_user=pengguna.id
        WHERE topik.id=:id";
            $query = $pdo->prepare($sql);
            $query->execute(array('id' => $_GET['id']));
            $topik = $query->fetch();
            if (empty($topik)) {
                echo '<p class="text-warning">Topik tidak ditemukan</p>';
            } else {
        ?>
                <div class="row mb-3">
                    <div class="col-auto">
                        <img src="//www.gravatar.com/avatar/<?php echo md5($topik['email']); ?>?s=48&d=monsterid" class="rounded-circle" />
                    </div>
                    <div class="col">
                        <div class="fw-bold"><?php echo htmlentities($topik['nama']); ?></div>
                        <small class="text-muted"><?php echo date('d M Y H:i', strtotime($topik['tanggal'])); ?></small>
                    </div>
                </div>
                <h2><?php echo htmlentities($topik['judul']); ?></h2>
                <p><?php echo nl2br(htmlentities($topik['deskripsi'])); ?></p>
                <hr />
                <?php
                $sql2 = "SELECT komentar.*, pengguna.nama, pengguna.email FROM komentar
          INNER JOIN pengguna ON pengguna.id = komentar.id_user
          WHERE id_topik=:id_topik";
                $query2 = $pdo->prepare($sql2);
                $query2->execute(array(
                    'id_topik' => $_GET['id']
                ));
                while ($komentar = $query2->fetch()) {
                ?>
                    <div class="row mb-3">
                        <div class="col-auto">
                            <img src="//www.gravatar.com/avatar/<?php echo md5($komentar['email']); ?>?s=48&d=monsterid" class="rounded-circle" />
                        </div>
                        <div class="col">
                            <div class="bg-light py-2 px-3 rounded">
                                <div class="row gx-2">
                                    <div class="col fw-bold">
                                        <?php echo htmlentities($komentar['nama']); ?>
                                    </div>
                                    <?php
                                    if ($_SESSION['user']['id'] == $komentar['id_user']) {
                                    ?>
                                        <div class="col-auto">
                                            <a href="hapus-komentar.php?id=<?php echo $komentar['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus komentar ini?')" class="text-muted"><small>Hapus</small></a>
                                        </div>
                                    <?php } ?>
                                    <div class="col-auto">
                                        <small class="text-muted"><?php echo date('d M Y H:i', strtotime($komentar['tanggal'])); ?></small>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <?php echo nl2br(htmlentities($komentar['komentar'])); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <hr />
                <div class="row">
                    <div class="col-auto">
                        <img src="//www.gravatar.com/avatar/<?php echo md5($_SESSION['user']['email']); ?>?s=48&d=monsterid" class="rounded-circle" />
                    </div>
                    <div class="col">
                        <form method="POST" action="jawab-topik.php">
                            <div class="mb-3">
                                <textarea class="form-control" name="komentar" placeholder="Jawab topik"></textarea>
                                <input type="hidden" value="<?php echo $topik['id']; ?>" name="id_topik" />
                            </div>
                            <div class="text-end">
                                <button class="btn btn-primary" type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>

    <script src="boostrap/js/bootstrap.bundle.min.js"></script>

    <!-- Privacy Policy End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>