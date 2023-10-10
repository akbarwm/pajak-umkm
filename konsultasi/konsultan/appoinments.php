<!DOCTYPE html>
<html lang="en">

<!-- doccure/appointments.html  30 Nov 2019 04:12:09 GMT -->
<?php
session_start();
include('conf/config.php');
include('layout/header.php');


$id = $_SESSION['id_konsultan'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_appoinment INNER JOIN tb_konsultan ON tb_appoinment.id_konsultans = tb_konsultan.id_konsultan INNER JOIN tb_users ON tb_appoinment.id_users = tb_users.id_users WHERE id_konsultan = '$id'");
$q2 = mysqli_fetch_assoc($query);



?>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <?php include('layout/navbar.php'); ?>
        <!-- /Header -->

        <!-- Breadcrumb -->
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Appointment</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <!-- start sidebar -->
                    <?php include('layout/sidebar.php') ?>
                    <!-- end sidebar -->

                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="tab-pane show active" id="upcoming-appointments">
                            <div class="card card-table mb-0">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Tanggal</th>
                                                    <th>Media</th>


                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($query as $q) : ?>
                                                    <tr>

                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../img/users_profil/<?= $q['foto_profil'] ?>" alt="User Image"></a>
                                                                <a href="patient-profile.html"><?= $q['nama']; ?> <span><?= $q['appoinment_number']; ?></span></a>
                                                            </h2>
                                                        </td>
                                                        <td><?php echo date("d F o", strtotime($q['hari'])); ?><span class="d-block text-info"><?php echo date("H:i", strtotime($q['jam'])); ?> WIB</span></td>
                                                        <td><?= $q['media']; ?></td>

                                                        <?php

                                                        $booked = "Booked";
                                                        $accept = "Accept";
                                                        $completed = "Completed";

                                                        if ($q['appoinment_status'] == $booked) {
                                                        ?> <td> <a href="" style="font-size: 10px; color: #fff; font-weight: bold;" class="btn btn-sm bg-warning"><?= $q['appoinment_status']; ?></a></td>
                                                        <?php
                                                        } else if ($q['appoinment_status'] == $accept) {
                                                        ?> <td> <a href="" style="font-size: 10px; color: #fff;  font-weight: bold;" class="btn btn-sm bg-success"><?= $q['appoinment_status']; ?></a></td>
                                                        <?php
                                                        } else if ($q['appoinment_status'] == $completed) {
                                                        ?> <td> <a href="" style="font-size: 10px; color: #fff;  font-weight: bold;" class="btn btn-sm bg-primary"><?= $q['appoinment_status']; ?></a></td>
                                                        <?php
                                                        }

                                                        ?>


                                                        <td class=" text-right">
                                                            <div class="table-action">
                                                                <button href="" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details<?= $q['id_appoinment']; ?>">
                                                                    <i class="far fa-eye">Details</i>

                                                                    <?php

                                                                    if ($q['appoinment_status'] == $accept) {
                                                                    ?> <form action="crud/acc_appt.php" method="post">

                                                                            <input type="text" name="id_appoinment" value="<?= $q['id_appoinment']; ?>" hidden>
                                                                            <input type="text" name="id_konsultans" value="<?= $q['id_konsultans']; ?>" hidden>
                                                                            <input type="text" name="id_users" value="<?= $q['id_users']; ?>" hidden>
                                                                            <input type="text" name="topik" value="<?= $q['topik']; ?>" hidden>
                                                                            <input type="text" name="hari" value="<?= $q['hari']; ?>" hidden>
                                                                            <input type="text" name="jam" value="<?= $q['jam']; ?>" hidden>
                                                                            <input type="text" name="jenis_pajak" value="<?= $q['jenis_pajak']; ?>" hidden>
                                                                            <input type="text" name="media" value="<?= $q['media']; ?>" hidden>
                                                                            <input type="text" name="accept" value="Completed" hidden>

                                                                            <input type="text" name="appoinment_number" value="<?= $q['appoinment_number']; ?>" hidden>

                                                                            <button class="btn btn-sm bg-success-light" type="submit" onclick="return confirm('Reservasi diterima?')">
                                                                                <i class="fas fa-check"></i> Completed
                                                                            </button>
                                                                        </form>
                                                                    <?php
                                                                    } else if ($q['appoinment_status'] == $completed) {
                                                                        echo "";
                                                                    } else {
                                                                    ?> <form action="crud/acc_appt.php" method="post">

                                                                            <input type="text" name="id_appoinment" value="<?= $q['id_appoinment']; ?>" hidden>
                                                                            <input type="text" name="id_konsultans" value="<?= $q['id_konsultans']; ?>" hidden>
                                                                            <input type="text" name="id_users" value="<?= $q['id_users']; ?>" hidden>
                                                                            <input type="text" name="topik" value="<?= $q['topik']; ?>" hidden>
                                                                            <input type="text" name="hari" value="<?= $q['hari']; ?>" hidden>
                                                                            <input type="text" name="jam" value="<?= $q['jam']; ?>" hidden>
                                                                            <input type="text" name="jenis_pajak" value="<?= $q['jenis_pajak']; ?>" hidden>
                                                                            <input type="text" name="media" value="<?= $q['media']; ?>" hidden>
                                                                            <input type="text" name="accept" value="Accept" hidden>

                                                                            <input type="text" name="appoinment_number" value="<?= $q['appoinment_number']; ?>" hidden>

                                                                            <button class="btn btn-sm bg-success-light" type="submit" onclick="return confirm('Reservasi diterima?')">
                                                                                <i class="fas fa-check"></i> Accept
                                                                            </button>
                                                                        </form>
                                                                    <?php
                                                                    }
                                                                    ?>


                                                            </div>
                                                        </td>
                                                    <?php endforeach; ?>
                                                    </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /Page Content -->



    </div>
    <!-- /Main Wrapper -->
    <?php foreach ($query as $qk) : ?>
        <!-- Appointment Details Modal -->
        <div class="modal fade custom-modal" id="appt_details<?= $qk['id_appoinment']; ?>">

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title"><?= $qk['appoinment_number']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        <ul class="info-details">
                            <li>
                                <div class="details-header">

                                    <div class="row">
                                        <div class="col-md-6">

                                            <span class="title">#<?= $qk['appoinment_number']; ?></span>
                                            <span class="text"><?php echo date("d F o", strtotime($q2['hari'])); ?><?php echo date(" H:i", strtotime($q2['jam'])); ?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-right">
                                                <button type="button" class="btn bg-success-light btn-sm" id="topup_status"><?= $qk['appoinment_status']; ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="title">Status:</span>
                                <span class="text"><?= $qk['appoinment_status']; ?></span>
                            </li>
                            <li>
                                <span class="title">Topik:</span>
                                <span class="text"><?= $qk['topik']; ?></span>
                            </li>
                            <li>
                                <span class="title">Jenis Pajak:</span>
                                <span class="text"><?= $qk['jenis_pajak']; ?></span>
                            </li>
                        </ul>

                    </div>


                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Sticky Sidebar JS -->
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

<!-- doccure/appointments.html  30 Nov 2019 04:12:09 GMT -->

</html>