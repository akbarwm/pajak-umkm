<!DOCTYPE html>
<html lang="en">

<!-- doccure/patient-dashboard.html  30 Nov 2019 04:12:16 GMT -->
<?php include('layout/header.php'); ?>
<?php include('conf/config.php');
session_start();

$id = $_SESSION['id'];
$query = mysqli_query($koneksi, ("SELECT * FROM `tb_users` WHERE id_users ='$id'"));
$q = mysqli_fetch_assoc($query);
?>

<body>

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
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="../css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="../css/owl.carousel.css">
        <!-- rsmenu CSS -->
        <link rel="stylesheet" type="text/css" href="../css/rsmenu-main.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="../css/magnific-popup.css">
        <!-- rsmenu transitions CSS -->
        <link rel="stylesheet" type="text/css" href="../css/rsmenu-transitions.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="../style.css">
        <!-- switch color presets css -->
        <link id="switch_style" href="#" rel="stylesheet" type="text/css">
        <!-- Spacing css -->
        <link rel="stylesheet" type="text/css" href="../css/spacing.css">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    </head>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <header class="header ">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="index-2.html" class="navbar-brand logo">
                        <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="index-2.html" class="menu-logo">
                            <img src="assets/img/logo.png" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li>
                            <a href="../index.php">BERANDA</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">PROFIL</i></a>

                        </li>
                        <li class="has-submenu active">
                            <a href="#">KALKULATOR</i></a>

                        </li>
                        <li class="has-submenu">
                            <a href="#">PERATURAN <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="voice-call.html">Peraturan Pajak Daerah</a></li>
                                <li><a href="video-call.html">Peraturan Pajak Daerah</a></li>
                                <li><a href="search.html">Peraturan Pajak Daerah</a></li>
                                <li><a href="calendar.html">Peraturan Pajak Daerah</a></li>
                                \
                            </ul>
                        </li>

                        <li class="login-link">
                            <a href="login.html">Login / Signup</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">

                    <!-- User Menu -->
                    <li class="nav-item dropdown has-arrow logged-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="user-img">
                                <img class="rounded-circle" src="assets/img/patients/patient.jpg" width="31" alt="Ryan Taylor">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img src="assets/img/patients/patient.jpg" alt="User Image" class="avatar-img rounded-circle">
                                </div>
                                <div class="user-text">
                                    <h6></h6>
                                    <p class="text-muted mb-0">Patient</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="patient-dashboard.html">Dashboard</a>
                            <a class="dropdown-item" href="profile-settings.html">Profile Settings</a>
                            <a class="dropdown-item" href="login.html">Logout</a>
                        </div>
                    </li>
                    <!-- /User Menu -->

                </ul>
            </nav>
        </header>
        <!-- /Header -->

        <!-- Breadcrumb -->
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../konsultasi.php">Konsultasi</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Akun</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Dashboard</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <!-- Page Content -->

        <div class="container">
            <div class="content">
                <div class="container-fluid">

                    <div class="row">

                        <!-- Profile Sidebar -->
                        <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                            <div class="profile-sidebar">
                                <div class="widget-profile pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="#" class="booking-doc-img">
                                            <img src="assets/img/patients/patient.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3><?= $q['nama']; ?></h3>
                                            <div class="patient-details">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-widget">
                                    <nav class="dashboard-menu">
                                        <ul>
                                            <li class="active">
                                                <a href="patient-dashboard.html">
                                                    <i class="fas fa-columns"></i>
                                                    <span>Dashboard</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="favourites.html">
                                                    <i class="fas fa-bookmark"></i>
                                                    <span>Favourites</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="chat.html">
                                                    <i class="fas fa-comments"></i>
                                                    <span>Message</span>
                                                    <small class="unread-msg">23</small>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="profile-settings.html">
                                                    <i class="fas fa-user-cog"></i>
                                                    <span>Profile Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="change-password.html">
                                                    <i class="fas fa-lock"></i>
                                                    <span>Change Password</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">
                                                    <i class="fas fa-sign-out-alt"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>
                        </div>
                        <!-- / Profile Sidebar -->

                        <div class="col-md-7 col-lg-8 col-xl-9">
                            <div class="card">
                                <div class="card-body pt-0">

                                    <!-- Tab Menu -->
                                    <nav class="user-tabs mb-4">
                                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#pat_prescriptions" data-toggle="tab">Prescriptions</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#pat_medical_records" data-toggle="tab"><span class="med-records">Medical Records</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#pat_billing" data-toggle="tab">Billing</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- /Tab Menu -->

                                    <!-- Tab Content -->
                                    <div class="tab-content pt-0">

                                        <!-- Appointment Tab -->

                                        <!-- /Appointment Tab -->

                                        <!-- Prescription Tab -->

                                        <!-- /Prescription Tab -->

                                        <!-- Medical Records Tab -->

                                        <!-- /Medical Records Tab -->

                                        <!-- Billing Tab -->

                                        <!-- /Billing Tab -->

                                    </div>
                                    <!-- Tab Content -->

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 order-last md-mb-40">
                    <div class="image-wrap animate2">
                        <img class="wow slideInright" src="../images/Konsultasi1.PNG" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec-title mb-36">
                        <h6 class="title bg-left">Mengapa Pilih Tanya Spesialis disini?</h6>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac sapien sed
                            etiam amet neque maecenas
                            laoreet. Non nec vel enim consequat vitae aliquam ut. Congue ultrices non venenatis massa. Lacus
                            elementum ut tellus ullamcorper non, facilisis vitae. Aliquet morbi sed vel phasellus semper
                            aliquet tellus</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Konsultasi End-->
        <br><br><br>
        <!-- Konsultasi Start-->
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="sec-title mb-36">
                        <h2 class="title bg-left">Mengapa Pilih Tanya Spesialis disini?</h2>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac sapien sed
                            etiam amet neque maecenas
                            laoreet. Non nec vel enim consequat vitae aliquam ut. Congue ultrices non venenatis massa. Lacus
                            elementum ut tellus ullamcorper non, facilisis vitae. Aliquet morbi sed vel phasellus semper
                            aliquet tellus. Hac purus risus ultricies vulputate. Convallis morbi suscipit velit eget
                            imperdiet sed.
                            Rutrum id amet fermentum quam vel leo. Viverra nisl in eu leo cursus id eget integer. Mattis
                            amet arcu cursus sodales aliquam vitae, elit. Eu id orci et ac tincidunt vitae nulla. Ut
                            malesuada malesuada pulvinar leo pulvinar laoreet. Vitae malesuada lorem turpis commodo dui.
                            Porta vulputate in nam purus ornare. Odio ut aenean praesent laoreet ullamcorper. Senec</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Konsultasi End-->
        <!-- Konsultasi Start-->
        <br><br><br>
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <div class="sec-title mb-36">
                        <h2 class="title bg-left ">Cara Menghubungi Spesialis Secara Online?</h2>
                        <p class=" text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac sapien
                            sedetiam ametneque maecenas laoreet. Non nec vel enim consequat vitae aliquam ut. Congue
                            ultrices nonvenenatis massa. Lacus elementum ut tellus ullamcorper nonNon nec vel enim consequat
                            vitae aliquam ut. Congueultrices nonvenenatis massa. Lacus elementum ut tellus ullamcorper
                            non,,<span>
                                <ol>
                                    <li>vel leo. Viverra nisl in eu leo cursus id eget integer. Mattis amet arcu cursus
                                        sodales aliquam vitae, </li>
                                    <li>pulvinar leo pulvinar laoreet. Vitae malesuada lorem turpis commodo dui </li>
                                    <li>Lacus elementum ut tellus ullamcorper non, facilisis vitae. Aliquet morbi sed vel
                                        phasellus semper aliquet tellus </li>
                                </ol>
                            </span>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac sapien sed etiam amet neque
                            maecenas laoreet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Footer -->
        <?php include('../layout/footer.php'); ?>
        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

    <!--  -->
    <!-- All Js -->
    <!-- modernizr js -->
    <script src="../js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="../js/jquery.min.js"></script>
    <!-- counter top js -->
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <!-- bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <!-- wow js -->
    <script src="../js/wow.min.js"></script>
    <!-- rsmenu js -->
    <script src="../js/rsmenu-main.js"></script>
    <!-- plugins js -->
    <script src="../js/plugins.js"></script>
    <!-- Contact js -->
    <script src="../js/contact.form.js"></script>
    <!-- main js -->
    <script src="../js/main.js"></script>
    <!-- jQuery -->
    <script src="../konsultan/assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../konsultan/assets/js/popper.min.js"></script>
    <script src="../konsultan/assets/js/bootstrap.min.js"></script>

    <!-- Sticky Sidebar JS -->
    <script src="../konsultan/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="../konsultan/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <!-- Custom JS -->
    <script src="../konsultan/assets/js/script.js"></script>

</body>

<!-- doccure/patient-dashboard.html  30 Nov 2019 04:12:16 GMT -->

</html>