<?php
session_start();
include('config/connection.php');
include('layouts/header.php');
?>

<!-- Basic Card Example -->
<div class="container">
    <div class="row">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Konsultan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Unique ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Bio</th>
                                <th scope="col">Profil Pic</th>
                                <th scope="col">Alumnus</th>
                                <th scope="col">Bidang</th>
                                <th scope="col">Status</th>
                                <th scope="col">Pengalaman</th>
                                <th scope="col">Jenjang Karir</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM tb_konsultan";
                            $result = mysqli_query($db, $sql);
                            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                            $idx = 1;
                            foreach ($rows as $row) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $idx; ?></th>
                                    <td><?= $row['unique_id'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['bio'] ?></td>
                                    <td><img src="../img/konsultan_profil/<?= $row['profil_pic'] ?>" alt="Profil Pic" width="50" height="50"></td>
                                    <td><?= $row['alumnus'] ?></td>
                                    <td><?= $row['bidang'] ?></td>
                                    <td><?= $row['status'] ?></td>
                                    <td><?= $row['pengalaman'] ?></td>
                                    <td><?= $row['jenjang_karir'] ?></td>
                                    <td>
                                        <a href="detail.php?id=<?= $row['id_konsultan'] ?>" class="btn btn-primary btn-sm">Detail</a>
                                    </td>
                                </tr>
                            <?php
                                $idx += 1;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('layouts/footer.php');
?>