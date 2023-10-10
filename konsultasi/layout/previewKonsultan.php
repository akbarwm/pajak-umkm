<div class=" spesialis-chooser col-12 col-sm-7  px-5 mt-5 mb-5">

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
    <div class="row justify-content-center">
        <div class="col-9 preview-spesialis">
            <img src="../konsultan/assets/img/konsultan/<?= $q['profil_pic']; ?>" alt="" class="img-fluid">
            <div class="row pt-4 mb-3">
                <div class="col-8">
                    <h3 class="mb-0 fw-bold"><?= $q['nama']; ?></h3>
                    <p class="fs-4"><?= $q['bidang']; ?></p>
                </div>
                <div class="col-4 text-right">
                    <button type="button" class="btn btn-success btn-sm"><?= $q['status']; ?></button>
                </div>
            </div>
            <!-- tentang spesialist -->
            <div class="mb-4">
                <h4 class="fw-semibold mb-1">Tentang</h4>
                <p class="text-justify">
                    <?= $q['bio']; ?>
                </p>
            </div>
            <div class="row">
                <div class="col-1 mx-2">
                    <h3><i class="bi bi-mortarboard-fill"></i></h3>
                </div>
                <div class="col">
                    <h5>Alumnus</h5>
                    <p>Administrasi Perpajakan - Universitas Indonesia</p>
                </div>
            </div>

            <div class="row">
                <div class="col-1 mx-2">
                    <h3><i class="bi bi-briefcase-fill"></i></h3>
                </div>
                <div class="col">
                    <h5>Jenjang Karir</h5>

                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>
                    <li>Lorem ipsum, dolor sit amet consectetur</li>

                </div>
            </div>
            <div class="row pt-5">
                <div class="col-3 col-lg-4 text-center">
                    <!-- <button type="button" class="btn btn-primary btn-md px-5 fw-bold">Chat</button> -->
                    <a class="btn btn-primary btn-md px-4 fw-bold" href="user/dashboard-user.php" role="button" data-toggle="modal" data-target="#modalApointment"><i class="bi bi-chat-dots-fill fs-3"></i>
                        Chats</a>
                </div>
                <div class="col-3 col-lg-4 text-center">
                    <!-- <button type="button" class="btn btn-primary btn-md px-4 fw-bold">Chat</button> -->
                    <a class="btn btn-primary btn-md px-4 fw-bold" href="user/dashboard-user.php" role="button" data-toggle="modal" data-target="#modalApointment"><i class="bi bi-telephone-fill fs-3"></i>
                        Telpon</a>
                </div>
                <div class="col-3 col-lg-4 text-center">
                    <!-- <button type="button" class="btn btn-primary  btn-md px-4 fw-bold">
                                        <a class="text-light" href="dashboard/html/app-chat.html"><i
                                                class="bi bi-camera-video-fill fs-3"></i> Zoom</a> </button> -->
                    <a class="btn btn-primary btn-md px-4 fw-bold" href="user/dashboard-user.php" role="button" data-toggle="modal" data-target="#modalApointment"><i class="bi bi-camera-video-fill fs-3"></i>
                        Zoom</a>
                </div>

            </div>


            <!-- tentang spesialist -->
        </div>
    </div>

</div>