<!DOCTYPE html>
<html lang="en">

<?php
session_start();

if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>


<head>
    <script src="../css/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../css/sweetalert2.min.css">

    <script src="../css/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../konsultan/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../konsultan/assets/css/style.css">
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
    <script src="../konsultan/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <link rel="stylesheet" href="../konsultan/assets/plugins/fontawesome/css/fontawesome.min.css">
    <!-- <link rel="stylesheet" href="../css/style2.css"> -->

    <!-- switch color presets css -->
    <link id="switch_style" href="#" rel="stylesheet" type="text/css">
    <!-- Spacing css -->
    <link rel="stylesheet" type="text/css" href="../css/spacing.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
</head>



<body>

    <!-- ======= Edit Section ======= -->

    <!-- end navbar -->
    <!-- konsultasi -->
    <nav aria-label="breadcrumb breadcrumb-lg">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Akun</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <section>
        <div class="container-fluid mt-0 pt-0">
            <div class="row">

                <!-- Profile Sidebar -->
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                    <div class="profile-sidebar">
                        <div class="widget-profile pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-doc-img">
                                    <img src="../images/foto_contoh.jpg" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h5><?php
                                        if (isset($_SESSION['user'])) {
                                            echo $_SESSION['user']['nama'];
                                        }
                                        ?></h3>
                                        <div class="patient-details">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widget semi-bold">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li class="active">
                                        <a href="account.php">
                                            <i class="fa fa-columns"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="confirmLogout()">
                                            <i class="fa fa-sign-out"></i>
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
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="#pat_prescriptions" data-toggle="tab">Prescriptions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pat_medical_records" data-toggle="tab"><span class="med-records">Medical Records</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pat_billing" data-toggle="tab">Billing</a>
                                    </li> -->
                                </ul>
                            </nav>
                            <!-- /Tab Menu -->

                            <!-- Tab Content -->
                            <div class="tab-content pt-0">


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
    </section>
    <!-- END konsultasi -->
    <br><br><br>







    <!-- The Modal -->
    <!-- Button trigger modal -->

    <!-- Modal -->




    <!-- Footer Start -->
    <?php include '../layout/footer.php'; ?>
    <!-- Footer End -->



    <!-- import modal sign up -->
    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'Konfirmasi Logout',
                text: 'Apakah Anda yakin ingin logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Logout',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to logout page
                    window.location.href = '../controller/logout.php';
                }
            });
        }
    </script>

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
    <script src="../konsultan/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="../konsultan/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</body>


</html>