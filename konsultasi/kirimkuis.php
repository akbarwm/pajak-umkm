<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Quiz</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <style>
        /* Custom CSS untuk mengatur tinggi kartu */
        .small-img {
            width: 50px;
            height: auto;
        }

        .text {
            margin-left: 750px;
            font-size: 14px;
            margin-top: -40px;
            font-weight: bold;
        }

        .container {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            /* agar box1 dan box3 berada di samping */
            max-width: 1350px;
            /* maksimum lebar container */
            margin: auto;
            margin-top: 30px;
        }

        .box1 {
            width: 1200px;
            background-color: white;
            border: 10px solid transparent;
            background-clip: padding-box;
            border-radius: 10px;
            position: relative;
            padding: 20px;
        }

        .box1::before {
            content: "";
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(to top, #289C5E, #4FA2ED);
            z-index: -1;
            border-radius: 10px;
        }

        .box3 {
            width: 280px;
            background-color: white;
            border: 10px solid transparent;
            background-clip: padding-box;
            border-radius: 10px;
            position: relative;
            padding: 20px;
            left: 50px;
            margin-left: -20px;
            /* jarak antara box1 dan box3 */
        }

        .box3::before {
            content: "";
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(to top, #289C5E, #4FA2ED);
            z-index: -1;
            border-radius: 10px;
        }

        .time-box1 {
            border: 1px solid #ccc;
            border-radius: 10px;
            border-color: #f0f0f0;
            background-color: #D9D9D9;
            padding: 10px;
            width: 100px;
            height: 40px;
            margin-top: 20px;
            font-weight: 1000;
            font-weight: normal;
            /* Menghilangkan bold */
        }

        .text-container h2 {
            margin-bottom: 20px;
        }

        .summary h3 {
            margin-bottom: 10px;
        }

        .questions h3 {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        .odd {
            background-color: #f9f9f9;
        }

        .button {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .number-button {
            background-color: #4CAF50;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 10%;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .number-button1 {
            margin-left: -50px;
            background-color: #D9D9D9;
            /* Gradasi warna */
            padding: 5px 12px;
            border-radius: 10%;
            /* Membuat sudut tombol melengkung */
        }

        .number-button2 {
            margin-left: 10px;
            background-color: #D9D9D9;
            /* Gradasi warna */
            padding: 5px 10px;
            border-radius: 10%;
            /* Membuat sudut tombol melengkung */
        }

        .number-button3 {
            margin-left: 10px;
            background-color: #D9D9D9;
            /* Gradasi warna */
            padding: 5px 10px;
            border-radius: 10%;
            /* Membuat sudut tombol melengkung */
        }

        .number-button4 {
            margin-left: 10px;
            background-color: #D9D9D9;
            /* Gradasi warna */
            padding: 5px 10px;
            border-radius: 10%;
            /* Membuat sudut tombol melengkung */
        }

        .number-button5 {
            margin-right: auto;
            margin-left: -50px;
            display: block;
            background-color: #D9D9D9;
            margin-top: 20px;
            padding: 5px 10px;
            /* Padding tombol */
            border-radius: 10%;
            /* Membuat sudut tombol melengkung */
        }

        .finish-button,
        .next-button,
        .back-button,
        .send-button {
            background-color: #808080;
            /* Ubah warna tombol kembali ke soal */
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100px;
            margin-bottom: 10px;
            /* tambahkan margin bottom */
        }

        .finish-button,
        .send-button {
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
        }

        .finish-button,
        .send-button {
            margin-top: 10px;
        }

        /* Tombol di bawah box1 */
        .bottom-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        .bottom-buttons button {
            margin: 5px 0;
            /* Tambahkan margin atas bawah */
            text-align: center;
            /* Teks berada di tengah */
            width: 200px;
            /* Menyesuaikan lebar */
            padding: 10px;
            /* Ubah padding agar tombol terlihat lebih baik */
            font-size: 16px;
            /* Ubah ukuran font sesuai kebutuhan */
        }

        table {
            border-collapse: collapse;
        }

        table th,
        table td {
            border: none;
            padding: 8px;
            text-align: left;
        }

        table th:nth-child(2),
        table td:nth-child(2) {
            text-align: center;
        }

        h3 {
            font-family: Arial, sans-serif;
            /* Mengatur jenis font */
            font-size: 1px;
            /* Mengatur ukuran teks */
            color: #333;
            /* Mengatur warna teks */
            margin-bottom: 10px;
            /* Tambahkan jarak bawah */
        }

        .footer {
            background-color: #f8f9fa;
            /* Warna latar belakang */
            padding: 20px;
            /* Padding */
            display: flex;
            /* Gunakan flexbox */
            align-items: center;
            /* Pusatkan secara vertikal */
            justify-content: center;
            /* Pusatkan secara horizontal */
            margin-top: 100px;
            margin-left: center;
        }

        .time-box {
            border: 1px solid #ccc;
            border-radius: 10px;
            border-color: red;
            padding: 20px;
            width: 200px;
            height: 50px;
            margin-left: 1820px;
            margin-top: -50px;
            display: flex;
            /* Menggunakan flexbox */
            justify-content: space-between;
            /* Menjadikan teks bersebelahan dan sejajar */
            align-items: center;
            /* Mengatur teks di tengah secara vertikal */
            font-weight: 800;
            margin-bottom: -30px;
            /* Atur jarak ke bawah sebesar 20px */
        }

        .time-box p {
            margin: 0;
            /* Menghilangkan margin bawaan dari paragraf */
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include '../connection.php';
    include 'navbar4.php';
    ?>
    <!-- Header Section Start-->
    <!-- Header Menu End -->

    <div class="mt-5 mb-5">
        <img src="../img/kuislogo.png " alt="" class="small-img" style="margin-top: 70px; margin-left: 690px">
        <div class="text">
            <h5>Kuis PPh 21: Penghitungan PPh 21</h5>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="box1">

            <div class="text-container mt-4 ml-4">
                <h2>Ringkasan Pengerjaan Kuis</h2>
                <div class="questions">
                    <table>
                        <tr>
                            <th>Status</th>
                            <th>Nilai/100.00</th>
                            <th>Evaluasi</th>
                        </tr>
                        <tr class="odd">
                            <td>Selesai<br>Dikirim Sabtu, 15 Maret 2024</td>
                            <td>80.00/100.00</td>
                            <td><a href="evaluasi_kuis.php">Evaluasi</td></a>
                        </tr>
                    </table>
                </div>
                <div class="bottom-buttons">
                    <a href="../index.php"><button class="send-button">Kembali ke beranda</button></a>
                </div>
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