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
                                    <li class="menu-item-has-children">
                                        <a href="../index.php">Beranda</a>
                                    </li>
                                    <li><a href="../layanan.php">Layanan</a></li>
                                    <li><a href="../kalkulator.php">Kalkulator</a></li>
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
                                                            <li><a href="../pajak_daerah.php">Peraturan Pajak Pusat</a> </li>
                                                            <li><a href="../pajak_daerahbatam.php">Peraturan Pajak Daerah Kota Batam</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php
                                    $__menuAktif = isset($__menuAktif) ? $__menuAktif : '';
                                    if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
                                    ?>
                                        <li>
                                            <a class="<?= ($__menuAktif == 'login') ? 'active' : '' ?>" href="login2.php">Login</a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a class="<?= ($__menuAktif == 'profil') ? 'active' : '' ?>" href="user/account.php">Profil</a>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>