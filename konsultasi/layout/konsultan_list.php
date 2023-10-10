<?php
// Membuat array asosiatif untuk memetakan nomor ke bidang
$bidangMap = array(
    1 => 'PPh Badan',
    2 => 'PPh Tahunan Pribadi',
    3 => 'PPh Pasal 21',
    4 => 'PPh Pasal 22 dan 23',
    5 => 'PPh Pasal 25'
);

if (isset($_GET['bidang'])) {
    $nomor = $_GET['bidang'];

    // Memeriksa apakah nomor yang diberikan ada dalam array map
    if (array_key_exists($nomor, $bidangMap)) {
        $bidang = $bidangMap[$nomor];

        $query = mysqli_query($koneksi, "SELECT * FROM tb_konsultan WHERE bidang = '$bidang'");

?>

        <div class="spesialis-chooser col-12 col-sm-7 mt-5 mb-5">
            <!-- head back button -->
            <div class="row">
                <div class="col-12 m-0 p-0">

                </div>
            </div>



            <div class="row">
                <div class="col-12 mt-10 p-0">
                    <h4 class="fs-5 fw-bold mb-1">Rekomendasi Spesialis</h4>
                    <p class="font-weight-light">Konsultasi dengan spesialis siaga kami</p>
                </div>
            </div>
            <div class="row mb-3 border-bottom">
                <div class="col p-0">
                    <div class="">
                        <a class="btn btn-light" href="konsultasi.php" role="button"><span><i class="bi bi-chevron-left"></i></span>kembali</a>
                    </div>
                </div>
            </div>
            <!-- head back button -->

            <?php foreach ($query as $q) : ?>
                <!-- catalog spesialis -->
                <div class="row panel-pakar">
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="row">
                            <div class="col-4 ps-0 p-0 m-0">
                                <img src="img/konsultan_profil/<?= $q['profil_pic']; ?>" class="m-0 p-0 rounded mx-auto d-block" style="width: 115px; height: 115px;">
                            </div>
                            <div class="col-8 px-2 px-sm-3">
                                <h5 class="fs-5 mb-0"><?= $q['nama']; ?></h5>
                                <p class="mb-0"><?= $q['bidang']; ?></p>
                                <button type="button" class="btn btn-light experienceBtn mb-0 p-1">5 tahun</button>
                                <br>
                                <a class="btn btn-primary chatNow" style="background-color: #01a0f9; width: 100px;" href="konsultasi_previewConsultant.php?kons=<?= $q['id_konsultan'] ?>" role="button">Chat</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

<?php
    }
}
