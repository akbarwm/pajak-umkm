<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>List User</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
  }

  img {
    height: 70px;
    width: 70px;
  }

  .search {
    margin: 20px 0;
    display: flex;
    position: relative;
    align-items: center;
    justify-content: space-between;
  }

  .search .text {
    font-size: 18px;
  }

  .search input {
    position: absolute;
    height: 42px;
    width: calc(100% - 50px);
    font-size: 16px;
    padding: 0 13px;
    border: 1px solid #e6e6e6;
    outline: none;
    border-radius: 5px 0 0 5px;
    opacity: 0;
    pointer-events: none;
    transition: all 0.2s ease;
  }

  .search input.show {
    opacity: 1;
    pointer-events: auto;
  }

  .search button {
    position: relative;
    z-index: 1;
    width: 47px;
    height: 42px;
    font-size: 17px;
    cursor: pointer;
    border: none;
    background: #fff;
    color: #333;
    outline: none;
    border-radius: 0 5px 5px 0;
    transition: all 0.2s ease;
  }

  .search button.active {
    background: #333;
    color: #fff;
  }

  .search button.active i::before {
    content: '\f00d';
  }

  .users-list {
    max-height: 350px;
    overflow-y: auto;
  }

  :is(.users-list, .chat-box)::-webkit-scrollbar {
    width: 10px;
  }

  .users-list a {
    padding-bottom: 10px;
    margin-bottom: 15px;
    padding-right: 15px;
    border-bottom-color: #f1f1f1;
  }

  .users-list a:last-child {
    margin-bottom: 0px;
    border-bottom: none;
  }

  .users-list a img {
    height: 50px;
    width: 50px;
  }

  .users-list a .details p {
    color: #67676a;
  }

  .users-list a .status-dot {
    font-size: 20px;
    color: #468669;
    padding-left: 10px;
  }

  .users-list a .status-dot.offline {
    color: #ccc;
  }

  .content {
    min-height: none !important;
    padding: 30px 0 0;
  }
</style>

<body>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-12 col-12">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Messages</li>
              </ol>
            </nav>
            <h2 class="breadcrumb-title">Messages</h2>
          </div>
        </div>
      </div>
    </div>

    <!-- /Breadcrumb -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <?php include('layout/sidebar.php'); ?>
          <div class="col-md-7 col-lg-8 col-xl-9">
            <div class="chat-window">
              <div class="container my-5">
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM users_konsultan WHERE unique_id = {$_SESSION['unique_id']}");
                if (mysqli_num_rows($sql) > 0) {
                  $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <div class="row align-items-center">
                  <div class="col-auto">
                    <img src="php/images/<?php echo $row['img']; ?>" alt="">
                  </div>
                  <div class="col-md-5">
                    <h3 id="nama"><?php echo $row['fname'] ?></h3>
                    <p id="nama">Bidang <?php echo $row['lname'] ?></p>
                  </div>
                  <div class="col-auto ml-auto"> <!-- Use 'ml-auto' to push it to the right -->
                    <h5 class="text-right <?php echo ($row['status'] === 'Active now') ? 'text-success' : 'text-warning'; ?>">
                      <?php echo $row['status']; ?>
                    </h5>
                  </div>
                  <div class="search">
                    <span class="text">Select an user to start chat</span>
                    <input type="text" placeholder="Enter name to search...">
                    <button><i class="fas fa-search"></i></button>
                  </div>

                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="users-list">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="javascript/users.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <!-- Privacy Policy End -->
  <?php include './layout/footer.php'; ?>
</body>

</html>