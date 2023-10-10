<?php
session_start();
?>
<header id="rs-header" class="">
    <!-- Header Menu Start -->
    <div class="menu-area menu-sticky sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.php"><img src="images/logo.PNG" style="width: 140px; right: 20px;" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10 mobile-menu-area">
                    <div class="rs-menu-area display-flex-center">
                        <div class="main-menu">
                            <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                            <nav style="margin-left: 40px;" class="rs-menu">
                                <ul class="nav-menu">
                                    <!-- Home -->
                                    <li class="current-menu-item current_page_item menu-item-has-children">
                                        <a href="#">Beranda</a>
                                    </li>
                                    <!-- End Home -->

                                    <li><a href="#profil">Profil</a></li>


                                    <li><a href="kalkulator.php">Kalkulator</a></li>

                                    <!-- Shop Menu Start -->
                                    <li class="menu-item-has-children"><a href="aplikasi pajak.php">Aplikasi
                                            Pajak</a>
                                        <ul class="sub-menu">
                                            <li><a href=https://taxcenter-polibatam.id target="_blank" rel="noopener noreferrer">Tax Center</a></li>
                                        </ul>
                                    </li>
                                    <!-- Shop Menu End -->

                                    <!-- Pages Mega Menu Start -->
                                    <li class="rs-mega-menu mega-rs menu-item-has-children"> <a href="#">Peraturan</a>
                                        <ul class="mega-menu">
                                            <li class="mega-menu-container">
                                                <div class="mega-menu-innner">
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="peraturan_pajak_pusat.php">Peraturan Pajak
                                                                    Pusat</a> </li>
                                                            <li><a href="peraturan_pajak_pusat.php">Peraturan Pajak
                                                                    Pusat</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="peraturan_pajak_daerah.php">Peraturan Pajak
                                                                    Daerah</a> </li>
                                                            <li><a href="peraturan_pajak_daerah.php">Peraturan Pajak
                                                                    Daerah</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="Putusan_Pengadilan_pajak.php">Putusan
                                                                    Pengadilan Pajak & MA</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> <!-- //.mega-menu -->
                                    </li>
                                    <!--Pages Mega Menu End -->

                                    <li>
                                    </li>
                                    <?php if ($_SESSION['id'] == true) {
                                    ?>
                                        <li class="rs-mega-menu mega-rs menu-item-has-children"> <a href="#" style="font-weight: bold;"><?= $_SESSION['nama']; ?></a>
                                            <ul class="mega-menu2">
                                                <li class="mega-menu-container">
                                                    <div class="mega-menu-innner">
                                                        <div class="single-megamenu2">
                                                            <ul class="sub-menu">
                                                                <li><a href="peraturan_pajak_pusat.php">Settings</a> </li>
                                                                <li><a href="controller/logout.php">Logout</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> <!-- //.mega-menu -->
                                        </li>
                                    <?php
                                    } else {
                                    ?> <li>
                                            <button class="btn btn-success mt-10" type="button" data-toggle="modal" data-target="#modalSignUp">LOGIN</button>
                                        </li>

                                    <?php
                                    }


                                    ?>

                                </ul>



                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Header Menu End -->
</header>