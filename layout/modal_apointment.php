<?php
include './connection.php';


?>

<!-- Modal -->
<div class="modal fade" id="modalApointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-lg">
        <div class="modal-content">
            <div class="modal-body px-0">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col">
                            <img src="images/hubungin pakar.png" alt="" class="img-fluid">
                        </div>
                        <div class=" col px-3">
                            <button type="button" class="close text-end" data-dismiss="modal">&times;</button>
                            <div class="row justify-content-center">
                                <form action="" method="POST" class="mb-4">
                                    <div class="col-11 ps-0">
                                        <div class="w-100">
                                            <h5 class="mb-4 w-75 fw-bold">Buat janji temu online dengan pakar kami</h5>
                                        </div>
                                        <!-- forms -->
                                        <div class="mb-2">
                                            <label for="topik" class="form-label">Topik</label>
                                            <input type="text" class="form-control py-2" name="topik" placeholder="topik">
                                            <label for="hariPertemuan" class="form-label">Rencana hari pertemuan</label>
                                            <input type="text" class="form-control py-2" id="datepicker" name="datepicker" placeholder="MM/DD/YYYY">
                                        </div>
                                        <div class="mb-2">
                                            <label for="noHp" class="form-label">Rencana jam pertemuan</label>
                                            <input type="text" class="form-control py-2 " id="timepicker" name="timepicker" placeholder="h:mm A">
                                        </div>
                                        <div class="form-group mb-2">
                                            <!-- <button type="submit"
                                                class="form-control btn btn-primary rounded submit px-8 py-8 fw-bold">Buat
                                                Janji Temu Online</button> -->
                                            <button type="submit" class="btn btn-primary d-flex justify-content-center rounded submit px-8 py-8 fw-bold " href="" role="button">Janji Temu Online</button>
                                        </div>
                                        <!-- forms END -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>