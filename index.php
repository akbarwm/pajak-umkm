<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Home | Sudut Pajak </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
</head>

<body>
    <?php
    session_start();
    include './connection.php';
    include 'konsultasi/navbar4.php';
    ?>
    <!-- Header Section Start-->
    <!-- Header Menu End -->

    <!-- Slider Section Start Here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 97px">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/Gambar1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Gambar2.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Gambar3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Slider Section end Here -->

    <!-- AboutSection Start-->
    <div class="container" id="profil">
        <br><br>
        <div class="row align-items-center">
            <div class="col-lg-6 order-last md-mb-40">
                <div class="image-wrap animate2">
                    <img class="wow slideInRight" src="images/Pajak.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-title mb-36">
                    <h2 class="title bg-left">Sudut Pajak </h2>
                    <p style="text-align: justify;">Kami "sudut pajak" merupakan layanan pajak berbasis website. Saat ini sudut pajak memberikan
                        layanan perpajakan online secara gratis baik konsultasi maupun secara teori dengan tujuan untuk
                        memberikan solusi permasalahan perpajakan oleh wajib pajak yang terdaftar dan yang belum
                        terdaftar. Fokus utama sudut pajak saat ini adalah untuk mendampingi pelaku UMKM dalam memahami
                        peraturan perpajakan.</p>
                </div>
            </div>
        </div>
    </div>
    </div><!-- .container end -->
    <!-- About Section End-->

    <!-- Counter Section Start Here-->
    <br><br><br><br>
    <div id="neuron-counter-area" class="neuron-counter-area gradient-bg-section pt-70 pb-70">
        <div class="container">
            <div class="row neuron-count">
                <!-- COUNTER-LIST START -->
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="neuron-counter-part text-center">
                        <div class="shape-img">
                            <img src="images/count-shape.png" alt="">
                        </div>
                        <div class="counter-text text-center">
                            <div class="neuron-counter white-color">100</div>
                            <h5 class="counter-txt white-color">Konsultasi</h5>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="neuron-counter-part text-center">
                        <div class="shape-img">
                            <img src="images/count-shape.png" alt="">
                        </div>
                        <div class="counter-text text-center">
                            <div class="neuron-counter white-color">200</div>
                            <h4 class="counter-txt white-color">Pelatihan serifikasi</h4>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-lg-3 col-md-6 sm-mb-30">
                    <div class="neuron-counter-part text-center">
                        <div class="shape-img">
                            <img src="images/count-shape.png" alt="">
                        </div>
                        <div class="counter-text text-center">
                            <div class="neuron-counter white-color">250</div>
                            <h4 class="counter-txt white-color">Berita</h4>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-lg-3 col-md-6">
                    <div class="neuron-counter-part text-center">
                        <div class="shape-img">
                            <img src="images/count-shape.png" alt="">
                        </div>
                        <div class="counter-text text-center">
                            <div class="neuron-counter white-color">150</div>
                            <h4 class="counter-txt white-color">Kategori Usaha</h4>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->
            </div>
        </div>
    </div>
    <!-- Counter Section End Here-->

    <!-- Services Section Start-->
    <div id="neuron-blog" class="neuron-blog home2-style pt-95 pb-175 md-pt-70 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-50">
                <h2 class="title bg-center margin-0">Layanan</h2><br>
                <div class="sec-title text-center mb-45">
                    <div class="rs-carousel owl-carousel wow" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="700" data-smart-speed="5000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="single-blog style2 white-bg ">
                            <div class="blog-img">
                                <a href="#"><img src="images/Layanan 1.png" alt=""></a>
                            </div>
                            <div class="blog-details">
                                <div class="blog-desc">
                                    <h3 class="blog-title"><a href="../PBL-25/konsultasi/index.php">Konsultasi</a></h3>
                                    <ul class="blog-meta">
                                        <li>Layanan konseling perpajakan yang dilaksanakan oleh expert perpajakan yang dimiliki oleh Sudut pajak sesuai dengan kebutuhan Wajib Pajak yang dibantu.</li>
                                    </ul>
                                    <div class="about-btn">
                                        <a style="width: -10px; left: 5px;" class="readon radius" href="../PBL-25/konsultasi/index.php">Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog style2 white-bg ">
                            <div class="blog-img">
                                <a href="#"><img src="images/Layanan 2.png" alt=""></a>
                            </div>
                            <div class="blog-details">
                                <div class="blog-desc">
                                    <h3 class="blog-title"><a href="#">Pelatihan atau Sertifikasi</a></h3>
                                    <ul class="blog-meta">
                                        <li>Memberikan pelatihan di bidang perpajakan seperti brevet pajak dan pelatihan lainnya terkait perpajakan serta memberikan sertifikasi di bidang perpajakan. </li>
                                        <br>
                                    </ul>
                                    <div class="about-btn">
                                        <a style="width: -10px; left: 5px;" class="readon radius" href="pelatihan_sertifikasi.php">Lebih
                                            Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog style2 white-bg">
                            <div class="blog-img">
                                <a href="#"><img src="images/Layanan 3.png" alt=""></a>
                            </div>
                            <div class="blog-details">
                                <div class="blog-desc">
                                    <h3 class="blog-title"><a href="">Berita</a></h3>
                                    <ul class="blog-meta">
                                        <li>Memberikan informasi terkait peristiwa-peristiwa yang berkaitan dengan perpajakan. </li><br><br><br>
                                    </ul>
                                    <div class="about-btn">
                                        <a style="width: -10px; left: 5px;" class="readon radius" href="#berita">Lebih
                                            Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog style2 white-bg">
                            <div class="blog-img">
                                <a href="#"><img src="images/Layanan 4.png" alt=""></a>
                            </div>
                            <div class="blog-details">
                                <div class="blog-desc">
                                    <h3 class="blog-title"><a href="#">Kategori Perbidang Usaha</a></h3>
                                    <ul class="blog-meta">
                                        <li>Memberikan layanan edukasi perpajakan yang terkait bidang-bidang usaha tertentu secara spesifik untuk masing-masing bidang usaha.</li><br>
                                    </ul>
                                    <div class="about-btn">
                                        <a style="width: -10px; left: 5px;" class="readon radius" id="konsultasi" href="kategoriusaha.php">Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End-->

    <!-- Konsultasi Start-->


    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-last md-mb-40">
                <div class="image-wrap animate2">
                    <img class="wow slideInright" src="images/Konsultasi1.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-title mb-36">
                    <h2 class="title bg-left">Aplikasi Online Pajak Solusi Pintar Mengelola Pajak Anda</h2>
                    <p>Mengelola pajak di Indonesia kini semakin mudah. Saatnya hitung, setor, dan lapor pajak
                        perusahaan Anda di satu aplikasi pajak online terpadu.</p>
                </div>
                <div class="about-btn">
                    <a class="readon radius" href="#">Mulai Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Konsultasi End-->

    <!-- Berita Start-->
    <div class="sec-title text-center mb-50" id="berita"><br><br><br><br><br><br><br><br><br>
        <h2 class="title bg-center margin-0">Berita</h2>
        <!-- <h2 class="title extra-none title-color mb-0">Frequently Asked Questions</h2> -->
    </div>
    <div class="container2">
        <?php
        $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 3";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $idx = 1;
        foreach ($row as $r) {
        ?>
            <div class="artikel-<?= $idx++; ?>">
                <div class="card2">
                    <img class="thumb" src="./user/demo1/tables/cover_berita/<?= $r['cover'] ?>" alt="">
                    <!-- <div class="thumb" style="background-image: url(http://localhost/PajakAdmin/<?= $r['cover'] ?>)"></div> -->
                    <article>
                        <h1 style="text-align: left;"><?= $r['judul'] ?></h1><br><br>
                        <p style="text-align: left;"><?= substr($r['isi'], 0, 180) ?> <a href="detail_berita.php?id=<?= $r['id'] ?>">read more</a></p>
                        <ul class="blog-meta">
                            <li style="margin-right: 50px; color: #01a0f9; width:200px"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><?= $r['tanggal_upload'] ?> <i class="fa fa-user-o" aria-hidden="true"></i>Admin</li>
                            <!-- <li style="margin-left: 150px; color: #01a0f9;"></li> -->
                        </ul>
                    </article>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    </div>
    <div class="col-lg-3 col-md-4">
        <div class="show-more text-right sm-text-left mt-35 sm-mt-25">
            <a style="width: -30px; left: 450px;" class="readon style2 radius" href="daftar_berita.php">Lihat Berita Lainnya</a>
        </div>
    </div><br><br><br><br><br>
    <!-- Berita End-->

    <!-- FAQ-->
    <div style="background-color: white; padding-top: 50px">
        <div class="sec-title text-center mb-45">
            <h2 class="title bg-center margin-0">Frequently Asked Questions</h2>
            <!-- <h2 class="title extra-none title-color mb-0">Frequently Asked Questions</h2> -->
        </div>
        <div class="container py-3" style="background-color: white;">
            <div class="row" style="background-color:white;">
                <div class="col-10 mx-auto">
                    <div class="accordion" id="faqExample">
                        <div class="card">
                            <div class="card-header p-2" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Siapa saja yang dapat menggunakan website ini?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                                <div class="card-body">
                                    <b></b> UMKM Kota Batam, Mahasiswa, Masyarakat Umum, Vendor Website (Admin), dan Konsultan Spesialis Pajak.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-2" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Bagaimana cara User mendaftar di Website Sudut Pajak?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                                <div class="card-body">
                                    <p>Klik log in pada tab log in</p>
                                    <p>Silahkan Klik Register</p>
                                    <p>Selesaikan Pendaftaran dengan melengkapi biodata diri</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-2" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Bagaimana Cara Menggunakan Fitur Kalkulator di Sudut Pajak?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                                <div class="card-body">
                                    Dalam Aplikasi Sudut Pajak, Anda dapat melakukan perhitungan PPh 21 atas gaji dengan
                                    langkah-langkah sebagai berikut
                                    <p>1. Klik opsi 'kalkulator' pada navigasi.</p>
                                    <p>2. Isilah informasi sesuai dengan data yang diperlukan.</p>
                                    <p>3. Setelah itu, klik tombol 'Selanjutnya', dan kalkulator akan menampilkan hasil perhitungan, Hasil ini menunjukkan jumlah PPh 21 yang harus dibayarkan pada periode tertentu.</p>
                                    <p>4. Jika Anda ingin mengulangi proses dengan data berbeda, cukup klik tombol reset</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-2" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        Apa yang Dimaksud dengan Aplikasi Pajak?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                                <div class="card-body">
                                    Fitur ini akan mengarahkan Anda ke situs Tax Center Politeknik Negeri Batam, yang
                                    menawarkan layanan bantuan perpajakan seperti Lapor Pajak Orang Pribadi dan Lapor Pajak
                                    Badan Usaha.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-2" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                                        Apa Fungsi dari Fitur Peraturan Pajak?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                                <div class="card-body">
                                    Fitur ini berisi informasi tentang Peraturan Pajak Pusat dan Peraturan Pajak Daerah Kota Batam. Anda dapat mengunduh rincian peraturan-peraturan ini dari laman tersebut.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--/row-->
        </div>
    </div>
    <!--FAQEND-->


    <!-- Contact Section Start -->
    <br><br><br><br><br><br><br>
    <div id="neuron-contact" class="neuron-contact contact-bg pb-100 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pr-30 md-pr-15">
                    <div class="contact-info box-shadow">
                        <div class="contact-info-icon">
                            <i class="flaticon-gps"></i>
                        </div>
                        <div class="sec-title mb-35">
                            <h2 class="title bg-left">Hubungi Kami</h2>
                        </div>
                        <div class="contact-icon">
                            <div class="icon-part">
                                <i class="flaticon-place"></i>
                            </div>
                            <div class="icon-text">
                                <h4 class="icon-title">Alamat</h4>
                                <p>Politeknik Negeri Batam <br>Jl. Ahmad Yani Batam Kota. Kota Batam. kepulauan Riau. Indonesia</p>
                            </div>
                        </div>
                        <div class="contact-icon">
                            <div class="icon-part">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="icon-text">
                                <h4 class="icon-title">WhatsApp</h4>
                                <a href="+62 813-7802-1623">+62 813-7802-1623</a>
                            </div>
                        </div>
                        <div class="contact-icon">
                            <div class="icon-part">
                                <i class="flaticon-mail-1"></i>
                            </div>
                            <div class="icon-text">
                                <h4 class="icon-title">Email</h4>
                                <a href="mailto: taxcenter@polibatam.ac.id"> taxcenter@polibatam.ac.id</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './layout/footer.php'; ?>
</body>

</html>