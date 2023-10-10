<?php
session_start();
include('config/connection.php');
include('layouts/header.php');


?>


<!-- Basic Card Example -->

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">LIST ARTICLE</h6>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM articles";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

      $idx = 1;
      foreach ($row as $r) {
      ?>
        <tr>
          <th scope="row"><?= $idx; ?></th>
          <td> <?= $r['judul'] ?></td>
          <td><?= $r['isi'] ?></td>
          <td><?= $r['kategori'] ?></td>
          <td style="width: 20%">
            <a href="./edit.php?id=<?= $r['id']; ?>" class="btn btn-primary">Edit</button>
              <a href="./deletearticle.php?id=<?= $r['id']; ?>" class="btn btn-danger">Delete</button>
          </td>
        </tr>
      <?php
        $idx += 1;
      }
      ?>
    </tbody>
  </table>
  <table class="table table-bordered">
  </table>
</div>


<?php
include('layouts/footer.php');
?>