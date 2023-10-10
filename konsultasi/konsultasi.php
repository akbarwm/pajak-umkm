<?php

session_start();


include('conf/config.php');
if (!isset($_SESSION['unique_id'])) {
    header("location: ./login.php?error=session_expired ");
}

require_once('controller/session_expired.php');
$query = mysqli_query($koneksi, "SELECT * FROM `tb_konsultan`");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- bootstrap v4 css -->
    <script src="./js/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['./css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/atlantis.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="./css/demo.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <!-- rsmenu CSS -->
    <link rel="stylesheet" type="text/css" href="css/rsmenu-main.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- rsmenu transitions CSS -->
    <link rel="stylesheet" type="text/css" href="css/rsmenu-transitions.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- switch color presets css -->
    <link id="switch_style" href="#" rel="stylesheet" type="text/css">
    <!-- Spacing css -->
    <link rel="stylesheet" type="text/css" href="css/spacing.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<?php include 'navbar2.php'; ?>
<!-- end navbar -->
<!-- konsultasi -->
<style>
    .carousel .carousel-indicators li {
        background-color: #7e9fbb;

    }

    .carousel .carousel-indicators li.active {
        background-color:
            #01a0f9;

    }
</style>
<section>
    <div class="container mt-5 pt-5">
        <div class="row border-bottom ">
            <div class="tutorialChatIlustration col-12 col-sm-5  p-3 border-end ">
                <?php include 'caption-kiri.php'; ?>

            </div>

            <div class=" spesialis-chooser col-12 col-sm-7 mt-5 mb-5 ">





                <div class="row">
                    <div class="col-12 mt-10">
                        <h4 class="fs-5 fw-bold mb-1">Rekomendasi Pakar Pajak</h4>
                        <p class="font-weight-light">Konsultasi dengan Pakar Pajak siaga kami</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 border-right">
                        <?php
                        $count = 0;
                        foreach ($query as $q) {
                            if ($count == 2) {
                                break;
                            }
                        ?>
                            <div class="col-12 col-sm-12 pt-2">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="img/konsultan_profil/<?= $q['profil_pic']; ?>" alt="chatIustrasi1" class="m-0 p-0 border-box " width="200">
                                    </div>
                                    <div class="col-sm-6">
                                        <h6 class="mb-0"><?= $q['nama']; ?></h6>
                                        <p class="fw-light text-dark mb-0"><?= $q['bidang']; ?></p>

                                        <button type="button" class="btn btn-light btn-sm experienceBtn mb-1"><i class="fa fa-suitcase"></i> &nbsp;<?= $q['pengalaman']; ?></button>


                                        <?php


                                        if (session_status() == PHP_SESSION_ACTIVE && !empty(session_id())) {
                                            // jika session sudah aktif dan session ID tidak kosong
                                            // maka tampilkan button yang memerlukan session
                                        ?> <a class="btn btn-primary chatNow" style="background-color: #01a0f9; width: 100px;" href="konsultasi_previewConsultant.php?kons=<?= $q['id_konsultan'] ?>" role="button">Chat</a>
                                        <?php
                                        } else {
                                            // jika session belum aktif atau session ID kosong
                                            // maka tampilkan pesan bahwa user harus login terlebih dahulu
                                        ?> <button type="button" class="btn btn-primary" style="background-color: #01a0f9;" data-toggle="modal" data-target="#myModal">Chat</button>
                                        <?php
                                        }
                                        ?>



                                        <br>

                                    </div>

                                </div>

                            </div>
                            <hr>
                    </div>

                    <div class="col-sm-6 ">

                    <?php
                            $count++;
                        }
                    ?>
                    </div>
                </div>


                <div class="container" style="position: relative;">
                    <div class="row overflow-auto">
                        <div class="col-sm-12">
                            <div class="category-title">
                                <div class="row">
                                    <div class="col p-0">
                                        <h4 class="fs-5 fw-bold mb-2">Kategori Pakar Pajak</h4>
                                        <p class="">Pilih kategori Pajak Pajak yang sesuai kondisi</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="div category">
                            <div class="row">
                                <div class="col-sm-12 d-flex align-items-center">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn text-start" href="konsultasi2.php?bidang=1" role="button">
                                                <img src="img/3_badan.png" alt="" class="float-start">
                                                <h6 class="text-secondary mt-2">PPh badan</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn  text-start " href="konsultasi2.php?bidang=2" role="button">
                                                <img src="img/1_tahunanPribadi.png" alt="" class="float-start">
                                                <h6 class="text-secondary mt-2">PPh tahunan <br>orang pribadi</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn  text-start" href="konsultasi2.php?bidang=3" role="button">
                                                <img src="img/4_pasal21.png" alt="" class="float-start">
                                                <h6 class="text-secondary mt-2">PPh pasal 21</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn ms-2 fs-6 text-start" href="konsultasi2.php?bidang=4" role="button">
                                                <img src="img/2_22dan23.png" alt="" class="float-start">
                                                <h6 class="text-secondary mt-2">PPh pasal 22 dan 23</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn ms-2 fs-6 text-start" href="konsultasi2.php?bidang=5" role="button">
                                                <img src="img/5_pasal25.png" alt="" class="float-start">
                                                <h6 class="text-secondary mt-2">PPh pasal 25</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-sm-6 d-flex align-items-center mb-3">

                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- END category -->
                </div>
                <!-- category -->
                <br><br>





            </div>

        </div>
    </div>
    <?php include 'caption-bawah.php' ?>
</section>
<!-- END konsultasi -->
<br><br><br> <?php include 'caption-bawah.php' ?>






<!-- The Modal -->
<!-- Button trigger modal -->

<!-- Modal -->




<!-- Footer Start -->
<?php include './layout/footer.php'; ?>
<!-- Footer End -->



<!-- import modal sign up -->
<?php include './layout/modal_signUp.php'; ?>

<!--  -->
<!-- All Js -->
<!-- modernizr js -->
<script src="js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="js/jquery.min.js"></script>
<!-- counter top js -->
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- magnific popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- rsmenu js -->
<script src="js/rsmenu-main.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- Contact js -->
<script src="js/contact.form.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
    // File JavaScript (modal.js)

    // Inisialisasi modal
    $('#myModal').modal({
        backdrop: 'static',
        keyboard: false,
        show: false
    });

    // Menampilkan modal
    $('#myModal').on('show.bs.modal', function() {
        console.log('Modal terbuka');
    });

    // Menyembunyikan modal
    $('#myModal').on('hide.bs.modal', function() {
        console.log('Modal tertutup');
    });
</script>


</body>
<?php include './layout/modalLogin.php'; ?>

</html>