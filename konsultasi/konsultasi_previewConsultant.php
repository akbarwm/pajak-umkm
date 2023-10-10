<?php
include('conf/config.php');



$idk = $_GET['kons'];
$query = mysqli_query($koneksi, "SELECT * FROM `tb_konsultan` WHERE id_konsultan = '$idk'");
$q = mysqli_fetch_assoc($query);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
    <!-- navbar -->
    <?php
    session_start();
    ?>

    <?php include 'navbar2.php' ?>
    <!-- end navbar -->
    <!-- konsultasi -->
    <section>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>


        <div class="container mt-2 pt-5">
            <div class="row border-bottom ">
                <div class="tutorialChatIlustration col-12 col-sm-5  p-3 border-end ">
                    <?php include 'caption-kiri.php'; ?>

                </div>

                <div class=" spesialis-chooser col-12 col-sm-7 mt-5  gray-bg">

                    <!-- head back button -->
                    <div class="row mb-3 border-bottom">

                        <div class="col p-0 ">
                            <div class="">
                                <!-- <button type="button" class="btn btn-light"><span><i
                    class="bi bi-chevron-left"></i></span> kembali</button> -->
                                <a class="btn btn-light" href="konsultasi.php" role="button"><span><i class="bi bi-chevron-left"></i></span>kembali</a>
                            </div>
                        </div>
                    </div>
                    <!-- head back button -->

                    <!-- catalog spesialis -->
                    <div class="row justify-content-center gray-bg">
                        <div class="col-7 preview-spesialis border" style="height: 115vh; width: 100%; overflow: auto; background-color:#ffff;">

                            <div class="position-relative mt-2">
                                <img src="img/konsultan_profil/<?= $q['profil_pic']; ?>" alt="" style="width: 100%" class="img-fluid rounded">
                                <?php

                                if ($q['status'] == 'Online') {
                                ?><div class="position-absolute bottom-0 end-0 bg-success text-white px-5 py-1 " style="z-index: 1; text-align: center; margin-top: -33px; width: 100%;">Online</div>
                                <?php
                                } else {
                                ?><div class="position-absolute bottom-0 end-0 bg-dark text-white px-5 py-1 " style="z-index: 1; text-align: center; margin-top: -33px; width: 100%;">Offline</div>
                                <?php
                                }

                                ?>


                            </div>







                            <div class="row pt-4 mb-3 border-bottom">
                                <div class="col-12">
                                    <h4 class="mb-0 fw-semi-bold"><?= $q['nama']; ?></h3>
                                        <p style="margin-bottom: 10px;"><?= $q['bidang']; ?></p>
                                        <button type="button" class="btn btn-dark btn-sm experienceBtn mb-3 bold"><i class="fa fa-suitcase"></i> &nbsp;&nbsp;&nbsp;<?= $q['pengalaman']; ?></button>
                                </div>

                                <div class="container"></div>
                            </div>
                            <!-- tentang spesialist -->
                            <div class="row">
                                <div class="col-12 mb-4 border-bottom">
                                    <h6 class="fw-semi-bold mb-1">Tentang</h6>
                                    <p class="text-justify">
                                        <?= $q['bio']; ?>
                                    </p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <h3><i class="fa fa-graduation-cap"></i></h3>
                                </div>
                                <div class="col-10">
                                    <h5 class="fw-semi-bold mb-1">Alumnus</h5>
                                    <p>Administrasi Perpajakan - Universitas Indonesia</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-2">
                                    <h3><i class="fa fa-suitcase"></i></h3>
                                </div>
                                <div class="col-10">
                                    <h5 class="fw-semi-bold mb-1">Jenjang Karir</h5>

                                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                                    <li>Lorem ipsum, dolor sit amet consectetur</li>

                                </div>
                            </div>
                            <div class="row border">
                                <div class="col-12 text-center">
                                    <!-- <button type="button" class="btn btn-primary btn-md px-5 fw-bold">Chat</button> -->
                                    <a class="btn btn-primary btn-lg" style="width: 100%; margin: 10px;" href="user/dashboard-user.php" role="button" data-toggle="modal" data-target="#modalApointment"></i>
                                        Chat</a>
                                </div>


                            </div>


                            <!-- tentang spesialist -->
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <!-- END konsultasi -->


    <?php include 'caption-bawah.php' ?>


    <!-- <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-12 paragrafSpace">
                <h4 class="fs-5 fw-bold">
                    Mengapa Chat Spesialis disini?
                </h4>
                <p class="fs-7 text-break">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac sapien sed
                    etiam amet neque maecenaslaoreet. Non nec vel enim consequat vitae aliquam ut. Congue ultrices
                    non venenatis
                    massa. Lacuselementum ut tellus ullamcorper non, facilisis vitae. Aliquet morbi sed vel
                    phasellus semperaliquet tellus. Hac purus risus ultricies vulputate. Convallis morbi suscipit
                    velit egetimperdiet sed.
                    Rutrum id amet fermentum quam vel leo. Viverra nisl in eu leo cursus id eget integer. Mattis
                    amet arcu cursus sodales aliquam vitae, elit. Eu id orci et ac tincidunt vitae nulla. Ut
                    malesuada malesuada pulvinar leo pulvinar laoreet. Vitae malesuada lorem turpis commodo dui.
                    Porta vulputate in nam purus ornare. Odio ut aenean praesent laoreet ullamcorper. Senectus
                    ullamcorper turpis et, a eu, dictum tempus. Bibendum porttitor tellus, magna condimentum
                    porttitor.
                </p>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-12 paragrafSpace">
                <h4 class="fs-5 fw-bold">
                    Mengapa Pilih Tanya Spesialis disini?
                </h4>
                <p class="fs-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac sapien sed etiam amet
                    neque maecenas laoreet. Non nec vel enim consequat vitae aliquam ut. Congue ultrices non
                    venenatis massa. Lacus elementum ut tellus ullamcorper non, facilisis vitae. Aliquet morbi sed
                    vel phasellus semper aliquet tellus. Hac purus risus ultricies vulputate. Convallis morbi
                    suscipit velit eget imperdiet sed.
                    Rutrum id amet fermentum quam vel leo. Viverra nisl in eu leo cursus id eget integer. Mattis
                    amet arcu cursus sodales aliquam vitae, elit. Eu id orci et ac tincidunt vitae nulla. Ut
                    malesuada malesuada pulvinar leo pulvinar laoreet. Vitae malesuada lorem turpis commodo dui.
                    Porta vulputate in nam purus ornare. Odio ut aenean praesent laoreet ullamcorper. Senec
                </p>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-12 paragrafSpace">
                <h4 class="fs-5 fw-bold">
                    Mengapa Chat Spesialis disini?
                </h4>
                <p class="fs-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac sapien sed etiam amet
                    neque maecenas laoreet. Non nec vel enim consequat vitae aliquam ut. Congue ultrices non
                    venenatis massa. Lacus elementum ut tellus ullamcorper non,<span>
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
    </div> -->




    <!-- Footer Start -->
    <?php include './layout/footer.php' ?>
    <!-- Footer End -->



    <!-- import modal sign up -->
    <?php
    ?>
    <!-- Modal -->
    <div class="modal fade" id="modalApointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md modal-lg">
            <div class="modal-content">
                <div class="modal-body px-0">
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col-lg ">
                                <img src="img/appointment-gambar.png" alt="" class="img-fluid">
                            </div>
                            <div class=" col px-3">
                                <button type="button" class="close text-end" data-dismiss="modal">&times;</button>
                                <div class="row justify-content-center">
                                    <div class="col-11 ps-0">
                                        <div class="w-100">
                                            <h5 class="mb-4 w-75 fw-bold">Buat janji temu online dengan pakar kami</h5>
                                        </div>
                                        <!-- forms -->
                                        <?php
                                        $kons = $_GET['kons'];
                                        ?>
                                        <form action="controller/appointment.php" method="post" class="mb-4">
                                            <div class="mb-2 ">
                                                <label for="topik" class="form-label"></label>
                                                <label for="inputDate" class="semi-bold">Topik</label>
                                                <input type="text" class="form-control py-2" name="topik" placeholder="">
                                                <input type="text" class="form-control py-2" name="konsultans" value="<?= $_GET['kons']; ?>" placeholder="topik" hidden>
                                                <input type="text" class="form-control py-2" name="unique_id_k" value="<?= $q['unique_id']; ?>" hidden>
                                                <input type="text" class="form-control py-2" name="users" value="<?= $_SESSION['id']; ?>" hidden>
                                                <input type="text" class="form-control py-2" name="unique_id" value="<?= $_SESSION['unique_id']; ?>" hidden>
                                                <input type="text" class="form-control py-2" name="media" value="Live Chat" placeholder="topik" hidden>
                                            </div>
                                            <div class="mb-2">
                                                <!-- Start Input Date , Start Time and End Time -->
                                                <div class="form-row">
                                                    <!-- Start Input Date -->
                                                    <div class="form-group col-md-6">
                                                        <label for="inputDate" class="semi-bold">Tanggal</label>
                                                        <input type="date" class="form-control" id="inputTanggalBaru" name="tgl" required />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputTime" class="semi-bold">Time</label>
                                                        <div class="input-group date">
                                                            <input type="time" class="form-control" id="inputJamBaru" name="jam">
                                                            <span class="input-group-addon"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">

                                                        <small style="display:flex; justify-content:right; color: red;">Masukkan sesuai jam kerja 08:00 - 18:00 WIB</small>
                                                    </div>








                                                    <!-- End Input Date -->
                                                </div>

                                                <!-- <div class="mb-2">
                                                    <label for="hariPertemuan" class="form-label">Rencana hari
                                                        pertemuan</label>
                                                    <input type="text" class="form-control py-2" name="tgl" placeholder="yyyy-mm-dd">
                                                    <label for="noHp" class="form-label">Rencana jam pertemuan</label>
                                                    <input type="text" class="form-control py-2 " name="jam" placeholder="mm-dd">
                                                </div> -->
                                                <label for="noHp" class="form-label semi-bold">Jenis Perpajakan</label>
                                                <select class="form-control mr-1" id="inputStartTimeHour" name="bidang" required>
                                                    <option value="" disabled selected>Pilih</option>
                                                    <option value="PPh Badan">PPh Badan</option>
                                                    <option value="PPh Pasal 21">PPh Pasal 21</option>
                                                    <option value="PPh Pasal 25">PPh Pasal 25</option>
                                                    <option value="PPh Pasal 22 dan 23">PPh Pasal 22 dan 23</option>
                                                    <option value="PPh Tahunan Orang Pribadi">PPh Tahunan Orang Pribadi</option>

                                                </select>
                                                <small class="form-text text-muted">Pilih jenis pajak yang ingin anda konsultasikan.</small>

                                                <label for="noHp" class="form-label semi-bold">Media</label>
                                                <select class="form-control mr-1" id="inputStartTimeHour" name="media" required>
                                                    <option value="" disabled selected>Pilih</option>
                                                    <option value="Live Chat">Live Chat</option>
                                                    <option value="Zoom" style="color: gray" disabled>Zoom (Segera)</option>



                                                </select>
                                                <div class="form-group mt-5 mb-3">
                                                    <!-- <button type="submit"
                                            class="form-control btn btn-primary rounded submit px-3 py-2 fw-bold">Buat
                                            Janji Temu Online</button> -->
                                                    <button type="submit" class="btn btn-primary btn-md d-flex justify-content-center rounded submit bold " role="button" style="width:
                                                    100%;">Janji Temu Online</button>

                                                </div>
                                                <small class="form-text text-muted">*Sesuai ketentuan yang berlaku</small>
                                        </form>
                                        <!-- forms END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script>
        // Mendapatkan tanggal lama dan jam lama
        var tanggalLama = new Date();
        var jamLama = "14:05";

        // Mendapatkan elemen input tanggal dan waktu baru
        var tanggalBaruInput = document.getElementById("inputTanggalBaru");
        var jamBaruInput = document.getElementById("inputJamBaru");

        // Mengatur atribut min pada input tanggal baru
        tanggalBaruInput.setAttribute("min", formatDate(tanggalLama));

        // Mengatur atribut min pada input waktu baru
        jamBaruInput.setAttribute("min", jamLama);

        // Fungsi untuk memformat tanggal menjadi format YYYY-MM-DD
        function formatDate(date) {
            var year = date.getFullYear();
            var month = (date.getMonth() + 1).toString().padStart(2, "0");
            var day = date.getDate().toString().padStart(2, "0");
            return year + "-" + month + "-" + day;
        }

        // Mendapatkan elemen input waktu baru
        var jamBaruInput = document.getElementById("inputJamBaru");

        // Mendapatkan jam kerja kantor (jam 8 pagi hingga 6 sore)
        var jamKerjaMulai = 8;
        var jamKerjaSelesai = 18;

        // Menghitung nilai minimum yang valid untuk atribut min
        var minJam = jamKerjaMulai.toString().padStart(2, "0") + ":00";

        // Mengatur atribut min pada input waktu baru
        jamBaruInput.setAttribute("min", minJam);

        // Fungsi untuk membatasi input waktu baru sesuai dengan jam kerja
        function limitJamBaru() {
            var jamBaru = jamBaruInput.value;
            var jamBaruParsed = parseInt(jamBaru.split(":")[0]);

            if (jamBaruParsed < jamKerjaMulai || jamBaruParsed >= jamKerjaSelesai) {
                // Jam baru berada di luar jam kerja, set nilai input waktu baru ke jam kerja mulai
                jamBaruInput.value = "";
            }
        }

        // Menambahkan event listener untuk membatasi input waktu baru saat nilainya berubah
        jamBaruInput.addEventListener("input", limitJamBaru);


        var today = new Date();
        var minDate = today.setDate(today.getDate() + 1);

        $('#datePicker').datetimepicker({
            useCurrent: false,
            format: "MM/DD/YYYY",
            minDate: minDate
        });

        var firstOpen = true;
        var time;

        $('#timePicker').datetimepicker({
            useCurrent: false,
            format: "hh:mm A"
        }).on('dp.show', function() {
            if (firstOpen) {
                time = moment().startOf('day');
                firstOpen = false;
            } else {
                time = "01:00 PM"
            }

            $(this).data('DateTimePicker').date(time);
        });
    </script>

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
</body>

</html>