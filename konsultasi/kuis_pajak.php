<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <title>Kuis Pajak PPh Pasal 21</title>
    <link rel="stylesheet" type="text/css" href="css/kuispajak.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
</head>


<body>
    <?php
    include '../connection.php';
    ?>
    <!-- Header Menu Start -->
    <?php include 'navbar3.php'; ?>
    <!-- Header Menu End -->

    <!-- Breadcrumbs Start -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-wrap">
            <img src="../images/bg.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title mb-17">Kuis Pajak</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li>Kuis Pajak</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <div id="neuron-privacy" class="neuron-privacy pt-90 pb-90 md-pt-73 md-pb-75">
        <div class="container">
            <div class="privacy-part">
                <div class="single-privacy mb-50">
                    <h2 class="privacy-title semi-bold mb-20 text-center">Kuis Pajak</h2>
                    <p class="privacy-desc margin-0 text-justify">Kuis pajak dirancang untuk menguji dan mengukur pemahaman seseorang tentang berbagai konsep dan peraturan perpajakan. Tujuan utamanya adalah untuk memastikan bahwa individu memiliki pengetahuan yang memadai tentang kewajiban pajak dan cara mengelola pajak dengan benar. Selain itu, kuis ini berfungsi sebagai alat pelatihan dan edukasi, membantu meningkatkan kesadaran dan kepatuhan terhadap peraturan pajak yang berlaku.</p>
                </div>
            </div>
            <div class="privacy-part">
                <div class="single-privacy">
                    <h2 class="privacy-title semi-bold mb-20 text-center">Kuis Yang Tersedia</h2>
                </div>
            </div>
            <div class="quiz-container mb-5">
                <?php
                // Query untuk mengambil data dari tabel quiz_pajak
                $query = "SELECT * FROM quiz_pajak";
                $result = mysqli_query($db, $query);

                // Loop untuk menampilkan setiap quiz
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="quiz-card">';
                    echo '    <div class="quiz-content">';
                    echo '        <img src="../img/kuislogo.png" alt="Logo Kuis" class="quiz-logo h-100">';
                    echo '        <h3>' . $row['judul_kuis'] . '</h3>';
                    echo '    </div>';
                    echo '    <button class="btn text-white mt-3"><a href="form_kuis.php?id=' . $row['id'] . '" class="text-white">Lihat</a></button>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    <!-- About Section End-->
    <?php include '../layout/footer.php'; ?>
</body>

</html>