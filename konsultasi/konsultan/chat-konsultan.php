<!DOCTYPE html>
<html lang="en">

<!-- doccure/chat-doctor.html  30 Nov 2019 04:12:13 GMT -->
<?php
session_start();

include('layout/header.php');
include('conf/config.php');




// $id = $_SESSION['id_konsultan'];
// $query = mysqli_query($koneksi, "SELECT * FROM tb_appoinment INNER JOIN tb_konsultan ON tb_appoinment.id_konsultans = tb_konsultan.id_konsultan INNER JOIN tb_users ON tb_appoinment.id_users = tb_users.id_users WHERE id_konsultan = '$id'");


// // untuk mengambil nama user di kolom chat
// $sql = mysqli_query($koneksi, "SELECT * FROM tb_users");
// $id_user = mysqli_fetch_assoc($sql);


?>

<body class="chat-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <?php include('layout/navbar.php'); ?>
        <!-- /Header -->



        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <?php include('layout/sidebar.php'); ?>
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="chat-window">

                            <!-- Chat Left -->
                            <!-- Chat Left -->
                            <div class="chat-cont-left">
                                <form class="chat-search">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </form>
                                <div class="chat-users-list">
                                    <div class="chat-scroll">

                                        <div class="users-list mt-3">

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /Chat Left -->
                            <?php if (empty($_GET['user_id'])) {
                            } else { ?>
                                <!-- Chat Right -->
                                <div class="chat-cont-right">
                                    <div class="chat-header">
                                        <?php
                                        $user_id = mysqli_real_escape_string($koneksi, $_GET['user_id']);

                                        $sql = mysqli_query($koneksi, "SELECT tb_konsultan.nama as konsultan_nama, tb_users.nama as user_nama, tb_users.foto_profil, tb_users.status 
                                        FROM tb_users
                                        LEFT JOIN tb_konsultan ON tb_users.unique_id = tb_konsultan.unique_id
                                        WHERE tb_users.unique_id = {$user_id}
                                                            
                                                            
                                                            ");
                                        if (mysqli_num_rows($sql) > 0) {
                                            $row = mysqli_fetch_assoc($sql);
                                        } else {
                                            echo "GAGAL";
                                        }
                                        ?>
                                        <div class="media">
                                            <div class="media-img-wrap">
                                                <div class="avatar avatar-online">
                                                    <img src="../img/users_profil/<?= $row['foto_profil'] ?>" alt="User Image" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-name"><?= $row['user_nama']; ?></div>
                                                <div class="user-status"><?= $row['status']; ?></div>
                                            </div>
                                        </div>
                                    </div>


                                    <style>
                                        .chat-box {
                                            position: relative;
                                            min-height: 400px;
                                            max-height: 400px;
                                            overflow-y: auto;
                                            padding: 10px 30px 20px 30px;
                                            background: #f7f7f7;
                                            box-shadow: inset 0 32px 32px -32px rgb(0 0 0 / 5%),
                                                inset 0 -32px 32px -32px rgb(0 0 0 / 5%);
                                        }

                                        .chat-box .text {
                                            position: absolute;
                                            top: 45%;
                                            left: 50%;
                                            width: calc(100% - 50px);
                                            text-align: center;
                                            transform: translate(-50%, -50%);
                                        }

                                        .chat-box .chat {
                                            margin: 15px 0;
                                        }

                                        .chat-box .chat p {
                                            word-wrap: break-word;
                                            padding: 8px 16px;
                                            box-shadow: 0 0 32px rgb(0 0 0 / 8%),
                                                0rem 16px 16px -16px rgb(0 0 0 / 10%);
                                        }

                                        .chat-box .outgoing {
                                            display: flex;
                                        }

                                        .chat-box .outgoing .details {
                                            margin-left: auto;
                                            max-width: calc(100% - 130px);
                                        }

                                        .outgoing .details p {
                                            background: #333;
                                            color: #fff;
                                            border-radius: 18px 18px 0 18px;
                                        }

                                        .chat-box .incoming {
                                            display: flex;
                                            align-items: flex-end;
                                        }

                                        .chat-box .incoming img {
                                            height: 35px;
                                            width: 35px;
                                        }

                                        .chat-box .incoming .details {
                                            margin-right: auto;
                                            margin-left: 10px;
                                            max-width: calc(100% - 130px);
                                        }

                                        .incoming .details p {
                                            background: #fff;
                                            color: #333;
                                            border-radius: 18px 18px 18px 0;
                                        }

                                        .typing-area {
                                            padding: 18px 30px;
                                            display: flex;
                                            justify-content: space-between;
                                        }

                                        .typing-area input {
                                            height: 45px;
                                            width: calc(100% - 58px);
                                            font-size: 16px;
                                            padding: 0 13px;
                                            border: 1px solid #e6e6e6;
                                            outline: none;
                                            border-radius: 5px 0 0 5px;
                                        }

                                        .typing-area button {
                                            color: #fff;
                                            width: 55px;
                                            border: none;
                                            outline: none;
                                            background: #333;
                                            font-size: 19px;
                                            cursor: pointer;
                                            opacity: 0.7;
                                            pointer-events: none;
                                            border-radius: 0 5px 5px 0;
                                            transition: all 0.3s ease;
                                        }

                                        .typing-area button.active {
                                            opacity: 1;
                                            pointer-events: auto;
                                        }
                                    </style>
                                    <div class="chat-body">
                                        <div class="chat-scroll">
                                            <div class="chat-box">

                                            </div>
                                            <form action="#" class="typing-area">
                                                <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                                                <input type="text" name="message" class="input-field" placeholder="Type Message" autocomplete="off">
                                                <button><i class="fa fa-telegram-plane"></i></button>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="chat-footer">

                                    </div>
                                </div>
                                <!-- /Chat Right -->
                            <?php } ?>
                        </div>



                    </div>
                </div>
            </div>
            <!-- /Row -->

        </div>

    </div>
    <!-- /Page Content -->

    <!-- Footer -->

    <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

    <!-- Voice Call Modal -->

    <!-- /Voice Call Modal -->

    <!-- Video Call Modal -->

    <!-- Video Call Modal -->
    <script src="../js/chat.js"></script>
    <script src="../js/users.js"></script>
    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

<!-- doccure/chat-doctor.html  30 Nov 2019 04:12:14 GMT -->

</html>