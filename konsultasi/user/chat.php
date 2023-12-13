<!DOCTYPE html>
<html lang="en">

<?php
// Di bagian atas skrip PHP
error_reporting(0); // Matikan pelaporan error
session_start();
$id = $_SESSION['id'];

include_once "../conf/config.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: ../login.php?error=session_expired ");
}
require_once('../controller/session_expired.php');
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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Akun</a></li>
            <li class="breadcrumb-item active" aria-current="page">Live Chat</li>
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
                                    <img src="../img/users_profil/<?= $_SESSION['foto_profil']; ?>" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h5><?= $_SESSION['nama']; ?></h3>
                                        <div class="patient-details">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widget semi-bold">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li>
                                        <a href="account.php">
                                            <i class="fa fa-columns"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="appointment_user.php">
                                            <i class="fa fa-calendar"></i>
                                            <span>Appointments</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="chat.php">
                                            <i class="fa fa-comments"></i>
                                            <span>Chat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profile-settings.html">
                                            <i class="fa fa-video"></i>
                                            <span>Zoom</span>
                                            <large class="unread-msg" style="background-color: orange;">soon</large>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <large class="unread-msg" style="background-color: orange;">soon</large>
                                            <i class="fa fa-globe"></i>
                                            <span>Forum</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profile-settings.html">
                                            <i class="fa fa-cog"></i>
                                            <span>Profile Settings</span>
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
                            <nav class="user-tabs">
                                <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#pat_appointments" data-toggle="tab">Chat</a>
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
                            <div class="tab-content">
                                <div class="content pt-0">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="chat-window">

                                                    <!-- Chat Left -->
                                                    <div class="chat-cont-left">
                                                        <form class="chat-search">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <i class="fas fa-search"></i>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Search">
                                                            </div>
                                                        </form>
                                                        <div class="chat-users-list">
                                                            <div class="chat-scroll">

                                                                <div class="users-list mt-3">

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Chat Left -->


                                                    <?php
                                                    if (empty($_GET['user_id'])) {
                                                    } else { ?>
                                                        <!-- Chat Right -->
                                                        <div class="chat-cont-right">
                                                            <div class="chat-header">
                                                                <?php
                                                                $user_id = mysqli_real_escape_string($koneksi, $_GET['user_id']);

                                                                $sql = mysqli_query($koneksi, "SELECT tb_konsultan.nama as konsultan_nama, tb_users.nama as user_nama , tb_konsultan.profil_pic, tb_konsultan.status
                                                            FROM tb_konsultan 
                                                            LEFT JOIN tb_users ON tb_users.unique_id = tb_konsultan.unique_id 
                                                            WHERE tb_konsultan.unique_id = {$user_id}
                                                            
                                                            
                                                            ");
                                                                if (mysqli_num_rows($sql) > 0) {
                                                                    $row = mysqli_fetch_assoc($sql);
                                                                } else {
                                                                    header("location: users.php");
                                                                }
                                                                ?>
                                                                <div class="media">
                                                                    <div class="media-img-wrap">
                                                                        <div class="avatar avatar-online">
                                                                            <img src="../img/konsultan_profil/<?= $row['profil_pic'] ?>" alt="User Image" class="avatar-img rounded-circle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="user-name"><?= $row['konsultan_nama']; ?></div>
                                                                        <div class="user-status"><?= $row['status']; ?></div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <style>
                                                                .chat-box {
                                                                    position: relative;
                                                                    min-height: 400px;
                                                                    max-height: 400px;
                                                                    overflow-y: auto;
                                                                    padding: 10px 30px 20px 30px;
                                                                    background: #f7f7f7;
                                                                    box-shadow: inset 0 32px 32px -32px rgb(0 0 0 / 5%),
                                                                        inset 0 -32px 32px -32px rgb(0 0 0 / 5%);
                                                                }

                                                                .chat-box .text {
                                                                    position: absolute;
                                                                    top: 45%;
                                                                    left: 50%;
                                                                    width: calc(100% - 50px);
                                                                    text-align: center;
                                                                    transform: translate(-50%, -50%);
                                                                }

                                                                .chat-box .chat {
                                                                    margin: 15px 0;
                                                                }

                                                                .chat-box .chat p {
                                                                    word-wrap: break-word;
                                                                    padding: 8px 16px;
                                                                    box-shadow: 0 0 32px rgb(0 0 0 / 8%),
                                                                        0rem 16px 16px -16px rgb(0 0 0 / 10%);
                                                                }

                                                                .chat-box .outgoing {
                                                                    display: flex;
                                                                }

                                                                .chat-box .outgoing .details {
                                                                    margin-left: auto;
                                                                    max-width: calc(100% - 130px);

                                                                }

                                                                .outgoing .details p {
                                                                    background: #09c778;
                                                                    color: #fff;
                                                                    border-radius: 10px 10px 0 15px;
                                                                }

                                                                .chat-box .incoming {
                                                                    display: flex;
                                                                    align-items: flex-end;
                                                                }

                                                                .chat-box .incoming img {
                                                                    height: 35px;
                                                                    width: 35px;
                                                                }

                                                                .chat-box .incoming .details {
                                                                    margin-right: auto;
                                                                    margin-left: 10px;
                                                                    max-width: calc(100% - 130px);
                                                                }

                                                                .incoming .details p {
                                                                    background: #fff;
                                                                    color: #333;
                                                                    border-radius: 18px 18px 18px 0;
                                                                }

                                                                .typing-area {
                                                                    padding: 18px 30px;
                                                                    display: flex;
                                                                    justify-content: space-between;
                                                                }

                                                                .typing-area input {
                                                                    height: 45px;
                                                                    width: calc(100% - 58px);
                                                                    font-size: 16px;
                                                                    padding: 0 13px;
                                                                    border: 1px solid #e6e6e6;
                                                                    outline: none;
                                                                    border-radius: 5px 0 0 5px;
                                                                }

                                                                .typing-area button {
                                                                    color: #fff;
                                                                    width: 55px;
                                                                    border: none;
                                                                    outline: none;
                                                                    background: #09c778;
                                                                    font-size: 19px;
                                                                    cursor: pointer;
                                                                    opacity: 0.7;
                                                                    pointer-events: none;
                                                                    border-radius: 0 5px 5px 0;
                                                                    transition: all 0.3s ease;
                                                                }

                                                                .typing-area button.active {
                                                                    opacity: 1;
                                                                    pointer-events: auto;
                                                                }
                                                            </style>
                                                            <div class="chat-body">
                                                                <div class="chat-scroll">
                                                                    <div class="chat-box">

                                                                    </div>

                                                                </div>


                                                            </div>

                                                            <?php

                                                            $query = mysqli_query($koneksi, "SELECT *
                                FROM tb_appoinment WHERE id_users = $id;");
                                                            $row = mysqli_fetch_assoc($query);

                                                            date_default_timezone_set('Asia/Jakarta');
                                                            $currentDateTime = date('Y-m-d H:i:s');
                                                            // echo $currentDateTime;
                                                            $dateString = $row['hari'] . ' ' . $row['jam']; // Menggabungkan hari dan jam dalam satu string
                                                            // echo $dateString;
                                                            $dateTime = date('Y-m-d H:i:s', strtotime($dateString)); // Mengonversi string menjadi format tanggal dan waktu yang diinginkan
                                                            // echo $dateTime;

                                                            if (strtotime($currentDateTime) > strtotime($dateTime) && $row['appoinment_status'] == 'Accept') {
                                                                // Tampilkan tombol "Print"
                                                            ?>
                                                                <form action="#" class="typing-area">
                                                                    <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                                                                    <input type="text" name="message" class="input-field" placeholder="Ty Message" autocomplete="off">
                                                                    <button><i class="fa fa-paper-plane"></i></button>
                                                                </form>
                                                            <?;
                                                            } else if ($row['appoinment_status'] == 'Accept') {

                                                            ?>



                                                            <?php

                                                            }
                                                            ?>

                                                            <form action="#" class="typing-area">
                                                                <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                                                                <input type="text" name="message" class="input-field" placeholder="Ty Message" autocomplete="off" hidden>
                                                                <button><i class="fa fa-paper-plane" hidden></i></button>
                                                            </form>


                                                            <div class="chat-footer">
                                                                <?php


                                                                // // Waktu appointment
                                                                // $appointmentDate = "2023-06-13 01:40:00";
                                                                // $currentTime = time();

                                                                // // Menghitung selisih waktu antara waktu sekarang dengan waktu appointment
                                                                // $timeDiff = strtotime($appointmentDate) - $currentTime;

                                                                // // Menghitung waktu mundur dalam jam, menit, dan detik
                                                                // $hours = floor($timeDiff / 3600);
                                                                // $minutes = floor(($timeDiff % 3600) / 60);
                                                                // $seconds = $timeDiff % 60;

                                                                // // Format waktu mundur dalam "1 jam 15 menit lagi"
                                                                // $countdownFormat = "";
                                                                // if ($hours > 0) {
                                                                //     $countdownFormat .= $hours . " jam ";
                                                                // }
                                                                // if ($minutes > 0) {
                                                                //     $countdownFormat .= $minutes . " menit ";
                                                                // }
                                                                // $countdownFormat .= "lagi";

                                                                // // Format waktu dalam "dd:mm:yy" dan "jam:menit:detik"
                                                                // $appointmentDateTime = new DateTime($appointmentDate);
                                                                // $appointmentDateFormat = $appointmentDateTime->format("d:m:y");
                                                                // $appointmentTimeFormat = $appointmentDateTime->format("H:i:s");


                                                                if (strtotime($currentDateTime) < strtotime($dateTime) && $row['appoinment_status'] == 'Accept') {
                                                                ?>
                                                                    <p style="text-align: center; font-weight:bold; color:#09c778">Reservasi Anda telah di terima, Silahkan menunggu hingga waktu yang ditentukan.</p>
                                                                <?php
                                                                } else if (strtotime($currentDateTime) < strtotime($dateTime)) {
                                                                ?>
                                                                    <p style="text-align: center; font-weight:bold; color:#09c778">Reservasi Anda telah berhasil dilakukan. Saat ini, reservasi Anda sedang dalam tahap menunggu persetujuan dari konsultan yang bersangkutan.</p>



                                                                <?php
                                                                } ?>

                                                            </div>
                                                        </div>

                                                        <!-- /Chat Right -->
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Row -->

                                    </div>

                                </div>



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


    <!--  -->
    <script>
        // // Waktu appointment


        // // Memperbarui countdown setiap detik
        // setInterval(updateCountdown, 1000);

        // function updateCountdown() {
        //     var currentTime = new Date();
        //     var timeDiff = appointmentDate - currentTime;

        //     // Menghitung waktu mundur dalam jam, menit, dan detik
        //     var hours = Math.floor(timeDiff / 3600000);
        //     var minutes = Math.floor((timeDiff % 3600000) / 60000);
        //     var seconds = Math.floor((timeDiff % 60000) / 1000);

        //     // Format waktu mundur dalam "1 jam 15 menit lagi"
        //     var countdownFormat = "";
        //     if (hours > 0) {
        //         countdownFormat += hours + " jam ";
        //     }
        //     if (minutes > 0) {
        //         countdownFormat += minutes + " menit ";
        //     }
        //     countdownFormat += seconds + " detik lagi";

        //     // Menampilkan waktu mundur
        //     document.getElementById("countdown").innerHTML = countdownFormat;
        // }
    </script>


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

    <!-- Chat Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../css/sweetalert2.all.min.js"></script>
    <script src="../js/chat.js"></script>
    <!-- Konsultan List -->
    <script src="../js/users.js"></script>
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