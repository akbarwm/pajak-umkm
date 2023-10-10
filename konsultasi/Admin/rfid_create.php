<?php
session_start();
include('layouts/header.php');
include('config/connection.php');

$query = mysqli_query($db, "DELETE FROM `tb_entry`");
?>

<body>


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Form Registrasi RFID</h1>
        <p class="mb-4"></p>

        <!-- Content Row -->
        <div class="row">

            <div class="col-md-12">

                <!-- Area Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form</h6>
                    </div>

                    <div class="card-body">
                        <form action="save_rfid.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">UID</label>
                                <input type="text" class="form-control" id="uid" name="id" placeholder="UID" aria-describedby="emailHelp" readonly>
                                <small id="emailHelp" class="form-text text-muted">Tap Kartu RFID </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>


            </div>


        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets2/js/sb-admin-2.min.js"></script>

    <script>
        function cekUID() {
            $.ajax({
                type: "GET",
                url: "entry.php",
                cache: false,
                success: function(response) {
                    console.log(response);
                    $("#uid").val(response)
                }
            });
        }
        setInterval(cekUID, 2000);
    </script>

</body>