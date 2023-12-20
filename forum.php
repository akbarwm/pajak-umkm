<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forum</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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


    <div class="container my-5">
        <?php
        if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            $pdo = require 'koneksi.php';
            $sql = "SELECT judul, tanggal, nama, email, topik.id, id_user FROM topik
          INNER JOIN users ON topik.id_user = users.id
          ORDER BY tanggal DESC";
            $query = $pdo->prepare($sql);
            $query->execute();
        ?>
            <div class="sec-title mb-36">
                <h2 class="title bg-left text">Daftar Topik</h2>
            </div>
            <a class="btn btn-primary" href="tambah-topik.php" role="button">Tambah Topik</a>
            <hr />
            <?php
            while ($data = $query->fetch()) {
            ?>
                <div class="row">
                    <div class="col-auto">
                        <img src="//www.gravatar.com/avatar/<?php echo md5($data['email']); ?>?s=48&d=monsterid" class="rounded-circle" />
                    </div>
                    <figure class="col">
                        <p>
                            <a href="lihat-topik.php?id=<?php echo $data['id']; ?>"><?php echo htmlentities($data['judul']); ?></a>
                        </p>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Privacy Policy End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>