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
    <?php include 'navbar4.php'; ?>
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
                    <p class="privacy-desc margin-0">Kuis Pajak adalah alat atau metode pembelajaran yang dirancang untuk menguji pengetahuan dan pemahaman seseorang tentang peraturan, prinsip, dan ketentuan perpajakan. Biasanya, kuis ini terdiri dari serangkaian pertanyaan yang mencakup berbagai aspek perpajakan, seperti jenis pajak, prosedur pengajuan pajak, perhitungan pajak, hak dan kewajiban wajib pajak, serta perubahan terbaru dalam undang-undang perpajakan.Kuis Pajak membantu peserta untuk lebih memahami konsep-konsep dasar dan kompleks dalam perpajakan.</p>

                    <p class="privacy-desc margin-0">Kuis pajak dirancang untuk menguji dan mengukur pemahaman seseorang tentang berbagai konsep dan peraturan perpajakan. Tujuan utamanya adalah untuk memastikan bahwa individu memiliki pengetahuan yang memadai tentang kewajiban pajak dan cara mengelola pajak dengan benar. Selain itu, kuis ini berfungsi sebagai alat pelatihan dan edukasi, membantu meningkatkan kesadaran dan kepatuhan terhadap peraturan pajak yang berlaku.</p>
                    <p class="privacy-desc margin-0">kuis pajak menjadi instrumen penting dalam memastikan bahwa semua pihak yang terlibat memiliki pemahaman yang baik dan mampu menjalankan tanggung jawab perpajakan dengan efektif.</p>
                </div>
            </div>
            <div class="quiz-container">
                <?php
                // Query untuk mengambil data dari tabel quiz_pajak
                $query = "SELECT * FROM quiz_pajak";
                $result = mysqli_query($db, $query); // Gunakan variabel $db

                // Loop untuk menampilkan setiap quiz
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="quiz-card">';
                    echo '    <div class="quiz-content">';
                    echo '        <img src="../img/kuislogo.png" alt="Logo Kuis" class="quiz-logo">';
                    echo '        <h3>' . $row['judul_kuis'] . '</h3>';
                    echo '    </div>';
                    echo '    <button class="btn text-white"><a href="form_kuis.php?id=' . $row['id'] . '" class="text-white">Lihat</a></button>';
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