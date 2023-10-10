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
    <?php include 'navbar2.php' ?>
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

                <?php include 'layout/konsultan_list.php'; ?>

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