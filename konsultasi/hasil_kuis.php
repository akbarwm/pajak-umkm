<?php
session_start();
include '../connection.php';
include 'navbar4.php';

// Query untuk mengambil data riwayat pengerjaan
$sql = "SELECT * FROM riwayat_pengerjaan";
$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Quiz</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <style>
        .small-img {
            width: 50px;
            height: auto;
        }

        .text {
            margin-left: 160px;
            font-size: 14px;
            margin-top: -40px;
            font-weight: bold;
        }

        .container {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            max-width: 1350px;
            margin: auto;
            margin-top: 30px;
        }

        .box1 {
            width: 1500px;
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
            padding: 5px 12px;
            border-radius: 10%;
        }

        .number-button2 {
            margin-left: 10px;
            background-color: #D9D9D9;
            padding: 5px 10px;
            border-radius: 10%;
        }

        .number-button3 {
            margin-left: 10px;
            background-color: #D9D9D9;
            padding: 5px 10px;
            border-radius: 10%;
        }

        .number-button4 {
            margin-left: 10px;
            background-color: #D9D9D9;
            padding: 5px 10px;
            border-radius: 10%;
        }

        .number-button5 {
            margin-right: auto;
            margin-left: -50px;
            display: block;
            background-color: #D9D9D9;
            margin-top: 20px;
            padding: 5px 10px;
            border-radius: 10%;
        }

        .finish-button,
        .next-button,
        .back-button,
        .send-button {
            background-color: #808080;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100px;
            margin-bottom: 10px;
        }

        .finish-button,
        .send-button {
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
        }

        .finish-button,
        .send-button {
            margin-top: 10px;
        }

        .bottom-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        .bottom-buttons button {
            margin: 5px 0;
            text-align: center;
            width: 200px;
            padding: 10px;
            font-size: 16px;
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
            font-size: 1px;
            color: #333;
            margin-bottom: 10px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
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
            justify-content: space-between;
            align-items: center;
            font-weight: 800;
            margin-bottom: -30px;
        }

        .time-box p {
            margin: 0;
        }
    </style>
</head>

<body>

    <br><br>
    <div class="mt-5 mb-5">
        <img src="../img/kuislogo.png " alt="" class="small-img" style="margin-top: 70px; margin-left: 100px">
        <div class="text">
            <h4>Kuis PPh 21: Penghitungan PPh 21</h4>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="box1">
            <div class="text-container mt-4 ml-4">
                <h4>Ringkasan Pengerjaan Kuis</h4>
                <div class="questions">
                    <table>
                        <tr>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Nilai</th>
                            <th>Evaluasi</th>
                        </tr>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <tr class="odd">
                                <td>Selesai</td>
                                <td><br>Dikirim <?php echo hari_indonesia(date('l', strtotime($row['tanggal']))); ?>, <?php echo date('j F Y', strtotime($row['tanggal'])); ?></td>
                                <td><?php echo $row['skor_akhir']; ?>.00</td>
                                <td><a href="evaluasi_kuis.php?id=<?php echo $row['id']; ?>">Evaluasi</a></td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                </div>
                <?php

                function hari_indonesia($day)
                {
                    switch ($day) {
                        case 'Sunday':
                            return 'Minggu';
                        case 'Monday':
                            return 'Senin';
                        case 'Tuesday':
                            return 'Selasa';
                        case 'Wednesday':
                            return 'Rabu';
                        case 'Thursday':
                            return 'Kamis';
                        case 'Friday':
                            return 'Jumat';
                        case 'Saturday':
                            return 'Sabtu';
                        default:
                            return $day;
                    }
                }
                ?>
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