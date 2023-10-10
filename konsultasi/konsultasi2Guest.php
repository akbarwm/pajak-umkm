<?php

session_start();


include('conf/config.php');


require_once('controller/session_expired.php');
$query = mysqli_query($koneksi, "SELECT * FROM `tb_konsultan`");


// if (isset($_GET['bidang'])) {
//     $nomor = $_GET['bidang'];

//     $bidang = '';

//     switch ($nomor) {
//         case 1:
//             $bidang = 'PPh Badan';
//             break;
//         case 2:
//             $bidang = 'PPh Tahunan Pribadi';
//             break;
//         case 3:
//             $bidang = 'PPh Pasal 21';
//             break;
//         case 4:
//             $bidang = 'PPh Pasal 22 dan 23';
//             break;
//         case 5:
//             $bidang = 'PPh Pasal 25';
//             break;

//             // tambahkan case untuk bidang lainnya jika diperlukan
//         default:
//             $bidang = 'Bidang Lainnya';
//             break;
//     }

//     // Menggunakan $bidang yang telah diinisialisasi untuk query atau aksi lainnya

// }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Home | Sudut Pajak </title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
    <!-- bootstrap v4 css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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
    <!-- <link rel="stylesheet" href="css/style2.css"> -->

    <!-- switch color presets css -->
    <link id="switch_style" href="#" rel="stylesheet" type="text/css">
    <!-- Spacing css -->
    <link rel="stylesheet" type="text/css" href="css/spacing.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<style>
    #rs-header .menu-sticky {
        background-color: #ffff;
        position: fixed;
        z-index: 999;
        margin: 0 auto;
        padding: 0;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
    }
</style>

<body>
    <!-- ======= Edit Section ======= -->

    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
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
    <style>
        #rs-header .menu-sticky {
            background-color: #ffff;
            position: fixed;
            z-index: 999;
            margin: 0 auto;
            padding: 0;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
        }
    </style>
    <header id="rs-header" class="">
        <!-- Header Menu Start -->
        <div class="menu-area menu-sticky sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo-area">
                            <a href="index.php"><img src="images/logo.png" style="width: 140px; right: 20px;" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 mobile-menu-area">
                        <div class="rs-menu-area display-flex-center">
                            <div class="main-menu">
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav style="margin-left: 90px;" class="rs-menu">
                                    <ul class="nav-menu">
                                        <li class="current-menu-item current_page_item menu-item-has-children">
                                            <a href="index.php">Beranda</a>
                                        </li>
                                        <li><a href="#profil">Profil</a></li>
                                        <li><a href="kalkulator.php">Kalkulator</a></li>
                                        <li class="menu-item-has-children"><a href="https://taxcenter-polibatam.id">Aplikasi
                                                Pajak</a>
                                        </li>
                                        <li class="rs-mega-menu mega-rs menu-item-has-children">
                                            <a href="#">Peraturan</a>
                                            <ul class="mega-menu">
                                                <li class="mega-menu-container">
                                                    <div class="mega-menu-innner">
                                                        <div class="single-megamenu">
                                                            <ul class="sub-menu">
                                                                <li><a href="pajak_daerah.php">Peraturan Pajak Daerah</a> </li>
                                                                <li><a href="pajak_daerahbatam.php">Peraturan Pajak Daerah Kota Batam</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                            </div>
                            <div class="about-btn">
                                <a style="width: -30px; left: 115px;" class="readon radius" target="_blank" rel="noopener noreferrer" href="login.php">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
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

                <?php include 'layout/konsultan-listGuest.php'; ?>

            </div>
        </div>
    </section>
    <!-- END konsultasi -->
    <br><br><br>
    <?php include 'caption-bawah.php'; ?>






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