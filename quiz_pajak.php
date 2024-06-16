<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Quiz</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <style>
        /* Custom CSS untuk mengatur tinggi kartu */
        .single-about {
            height: 300px;
        }

        .single-about>p {
            color: black;
        }

        .small-img {
            width: 50px;
            /* Ubah ukuran sesuai kebutuhan Anda */
            height: auto;
        }

        .text {
            margin-left: 430px;
            /* Jarak antara gambar dan tulisan */
            font-size: 14px;
            /* Ukuran font tulisan */
            margin-top: -40px;
            font-weight: bold;
            /* Menebalkan teks */
        }

        .box {
            width: 90%;
            /* Sesuaikan ukuran kotak */
            max-width: 1350px;
            height: 300px;
            /* Sesuaikan ukuran kotak */
            background-color: white;
            /* Warna latar belakang kotak */
            border: 10px solid transparent;
            /* Membuat border transparan */
            background-clip: padding-box;
            /* Membatasi background agar tidak melewati border */
         
            /* Membuat sudut kotak menjadi bulat */
            margin: auto;
            /* Menengahkan kotak secara horizontal */
            margin-top: 20px;
            /* Jarak antara teks dan kotak */
            position: relative;
        }

        .box::before {
            content: "";
            position: absolute;
            top: -5px;
            /* Sesuaikan dengan ukuran border */
            left: -5px;
            /* Sesuaikan dengan ukuran border */
            right: -5px;
            /* Sesuaikan dengan ukuran border */
            bottom: -5px;
            /* Sesuaikan dengan ukuran border */
            background: linear-gradient(to top, #289C5E, #4FA2ED);
            z-index: -1;
            border-radius: 10px;
        }


        
        .big-img {
            position: absolute;
            margin-right: 100px;
            margin-top: 50px;
            width: 1200px;
            height: auto;
        }

        .text-bold {
            font-weight: 900;
            /* Anda dapat menggunakan nilai antara 400 (normal) hingga 900 (tebal) */
        }
        .text-left {
            font-size: 18px; /* Increase font size as desired */
        }

        .button {
            background: linear-gradient(to right, #289C5E, #4FA2ED);
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            width: 200px;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            margin: 30px auto; /* Center horizontally */
        }

        .button:hover {
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2); /* Efek bayangan lebih besar saat hover */
            transform: translateY(-2px); /* Efek angkat tombol saat hover */
        }
        
        

        .footer{
            margin-top:15%;
            text-align:center;
            color:black;
            background-color: #f8f9fa;
            
        }
        
    </style>
</head>

<body>
<?php
    session_start();
    include './connection.php';
    include 'konsultasi/navbar4.php';
    ?>
    <!-- Header Section Start-->
    <!-- Header Menu End -->

    <br>
    <div class="mt-5 mb-5">
        <img src="img/image.png" alt="" class="small-img" style="margin-top: 100px; margin-left: 350px">
        <div class="text">
            <h3>KUIS PPh 21: PENGHITUNGAN PPh 21</h3>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="box mx-auto"><br>
            <div class="text-left mt-4 ml-5 ">
                <p><span class="text-bold">Dibuka</span> &nbsp;&nbsp;: Senin, 01 January 2024</p>
                <p><span class="text-bold">Waktu</span>   &nbsp;&nbsp;&nbsp;: 25 menit</p>
                <p><span class="text-bold">Soal</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 5 soal</p>
            </div>
            <div class="">
    <a href="quiz1_pajak.php" class="button">Mulai</a>
</div>
        </div>
    </div>

    <footer>
        <div class="footer">
            <p>&copy; Copyrights 2023 Polibatam</p>
        </div>
    </footer>



</body>

</html>