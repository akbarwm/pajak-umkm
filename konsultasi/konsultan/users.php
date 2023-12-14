<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
  include('layout/header.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SUDUT PAJAK - Konsultan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 fixed-top">
          <?php include('layout/sidebar.php') ?>
        </div>
        <!-- Main Content -->
        <div class="col-md-9">
          <div class="wrapper">
            <section class="users">
              <header>
                <div class="content">
                  <?php
                  $sql = mysqli_query($conn, "SELECT * FROM users_konsultan WHERE unique_id = {$_SESSION['unique_id']}");
                  if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                  }
                  ?>
                  <img src="php/images/<?php echo $row['img']; ?>" alt="">
                  <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                    <p><?php echo $row['status']; ?></p>
                  </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
              </header>
              <div class="search">
                <span class="text">Select a user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
              </div>
              <div class="users-list">
                <!-- ... Daftar pengguna Anda ... -->
              </div>
            </section>
          </div>
        </div>
        <!-- Main Content end -->
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="assets/js/jquery.min.js"></script>

  <!-- Bootstrap Core JS -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Sticky Sidebar JS -->
  <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

  <!-- Circle Progress JS -->
  <script src="assets/js/circle-progress.min.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>
  <script src="javascript/users.js"></script>
</body>

</html>