<?php
require_once 'cek-akses.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Lihat Topik</title>
</head>

<body>
    <?php include 'konsultasi/navbar4.php'; ?>

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
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $pdo = require 'koneksi.php';
            $sql = "SELECT topik.*, users.nama, users.email FROM topik
        INNER JOIN users ON topik.id_user=users.id
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
                <h3><?php echo htmlentities($topik['judul']); ?></h3>
                <p><?php echo nl2br(htmlentities($topik['deskripsi'])); ?></p>
                <hr />
                <?php
                $sql2 = "SELECT komentar.*, users.nama, users.email FROM komentar
          INNER JOIN users ON users.id = komentar.id_user
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>