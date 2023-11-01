<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "pajak2";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

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
    include './connection.php';
    ?>
    <!-- Header Section Start-->
    <?php include 'konsultasi/navbar3.php'; ?>
    <!-- Header Menu End -->

    <!-- Breadcrumbs Start -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-wrap">
            <img src="images/bg.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title mb-17">Bidang Agribisnis</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li>Kategori Perbidang Usaha</li>
                                <li>Bidang Agribisnis</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Privacy Policy Start -->
    <div id="neuron-privacy" class="neuron-privacy pt-90 pb-90 md-pt-73 md-pb-75">
        <div class="container">
            <div class="privacy-part">
                <div class="single-privacy mb-20">
                    <h2 class="privacy-title semi-bold">Bidang Agribisnis</h2>
                </div>
                <?php
                $query = "SELECT * FROM kategori_usaha";
                $db = $conn->query($query);

                // Menggeser pointer data ke baris kedua
                mysqli_data_seek($db, 3);

                $data = mysqli_fetch_array($db, MYSQLI_ASSOC);

                if ($data) {
                    echo "<p>" . $data["deskripsi"] . "</p>";
                } else {
                    echo "<p>Tidak ada data yang ditemukan</p>";
                }
                ?>
            </div>
        </div>

        <!-- Privacy Policy End -->
        <?php include './layout/footer.php'; ?>
</body>

</html>