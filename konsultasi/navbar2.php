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
                                                            <li><a href="../pajak_daerah.php">Peraturan Pajak Daerah</a> </li>
                                                            <li><a href="../pajak_daerahbatam.php">Peraturan Pajak Daerah Kota Batam</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                        </div>
                        <?php
                        if (isset($_SESSION['unique_id'])) {
                        ?>
                            <nav class="navbar navbar-expand-lg ">

                                <style>
                                    .navigation {
                                        position: fixed;
                                        top: 20px;
                                        right: 20px;
                                        width: 120px;
                                        height: 60px;
                                        display: flex;
                                        justify-content: space-between;
                                        border-radius: 5px;
                                        background: var(--white);
                                        box-shadow: 0 25px 35px rgba(0, 0, 0, 0.1);
                                        overflow: hidden;
                                        transition: height 0.5s, width 0.5s;
                                        transition-delay: 0s, 0.5s;
                                        z-index: 9999;
                                    }

                                    .navigation .user-box {
                                        position: relative;
                                        width: 60px;
                                        height: 60px;
                                        display: flex;

                                        align-items: center;
                                        overflow: hidden;
                                        transition: 0.5s;
                                        transition-delay: 0.5s;
                                    }

                                    .navigation .user-box .username {
                                        font-size: 1.2rem;
                                        white-space: nowrap;
                                        color: var(--gray);
                                    }

                                    .navigation .user-box .image-box {
                                        position: relative;
                                        min-width: 60px;
                                        height: 60px;
                                        background: var(--white);
                                        border-radius: 50%;
                                        overflow: hidden;
                                        border: 10px solid var(--white);

                                    }

                                    .navigation .user-box .image-box img {
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        width: 100%;
                                        height: 100%;
                                        object-fit: cover;
                                    }

                                    .navigation .menu-toggle {
                                        position: relative;
                                        background-color: aqua;
                                        width: 60px;
                                        height: 60px;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        cursor: pointer;

                                    }

                                    .navigation .menu-toggle::before {
                                        content: "";
                                        position: absolute;
                                        width: 32px;
                                        height: 2px;
                                        background: var(--gray);
                                        transform: translateY(-10px);
                                        box-shadow: 0 10px var(--gray);
                                        transition: 0.5s;
                                    }

                                    .navigation .menu-toggle::after {
                                        content: "";
                                        position: absolute;
                                        width: 32px;
                                        height: 2px;
                                        background: var(--gray);
                                        transform: translateY(10px);
                                        transition: 0.5s;

                                    }

                                    .menu {
                                        position: absolute;
                                        width: 100%;
                                        height: calc(100% - 60px);
                                        margin-top: 60px;
                                        padding: 20px;

                                        border-top: 1px solid rgba(0, 0, 0, 0.1);
                                    }

                                    .menu li {
                                        list-style: none;

                                    }

                                    .menu li a {
                                        display: flex;

                                        align-items: center;
                                        gap: 10px;
                                        margin: 20px 0;
                                        font-size: 1rem;
                                        text-decoration: none;
                                        color: var(--gray);
                                    }

                                    .menu li a ion-icon {
                                        font-size: 1.5rem;
                                    }

                                    .menu li a:hover {
                                        color: var(--purple);
                                    }

                                    .navigation.active .menu-toggle::before {
                                        transform: translateY(0px) rotate(45deg);
                                        box-shadow: none;

                                    }

                                    .navigation.active .menu-toggle::after {
                                        transform: translateY(0px) rotate(-45deg);
                                    }

                                    .navigation.active {
                                        width: 300px;
                                        height: 350px;
                                        transition: width 0.5s, height 0.5s;
                                        transition-delay: 0s, 0.3s;

                                    }

                                    .navigation.active .user-box {
                                        width: calc(100% - 60px);
                                        transition-delay: 0s;
                                    }
                                </style>

                                <div class="navigation">
                                    <div class="user-box">
                                        <div class="image-box">
                                            <img src="./img/users_profil/<?= $_SESSION['foto_profil']; ?>" alt="avatar">
                                        </div>
                                        <p class="username text-center"><?= $_SESSION['nama']; ?>

                                        </p>
                                        <br><br>






                                    </div>
                                    <div class="menu-toggle"></div>
                                    <ul class="menu">
                                        <li><a href="./user/account.php"><ion-icon name="log-out-outline"></ion-icon>Account</a></li>
                                        <li><a href="#"><ion-icon name="notifications-outline"></ion-icon>Notification</a></li>
                                        <li><a href="#"><ion-icon name="cog-outline"></ion-icon></ion-icon>Settings</a></li>
                                        <li><a href="./controller/logout.php"><ion-icon name="log-out-outline"></ion-icon>Logout</a></li>
                                    </ul>
                                </div>


                            </nav>
                        <?php

                        } else {
                        ?>
                            <div class="about-btn">
                                <a style="width: -30px; left: 115px;" class="readon radius" rel="noopener noreferrer" href="login.php">Login</a>
                            </div>
                        <?php
                        };
                        ?>

                        <script>
                            let menuToggle = document.querySelector('.menu-toggle');
                            let navigation = document.querySelector('.navigation');

                            menuToggle.onclick = function() {
                                navigation.classList.toggle('active');
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>