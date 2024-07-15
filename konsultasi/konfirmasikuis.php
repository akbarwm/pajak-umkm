<?php
session_start();
include '../connection.php';

// Fetch questions from database
$sql = "SELECT * FROM soal_pajak ORDER BY id";
$result = mysqli_query($db, $sql);
$questions = [];
while ($row = mysqli_fetch_assoc($result)) {
    $questions[] = $row;
}

// Retrieve submitted answers
$answers = isset($_POST['answers']) ? $_POST['answers'] : [];

// Mapping for answer IDs to letters (A, B, C, D, E)
$answer_map = ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'D', '5' => 'E'];
foreach ($answers as &$answer) {
    if (isset($answer_map[$answer])) {
        $answer = $answer_map[$answer];
    }
}

// Calculate score
$skor = 0;
foreach ($questions as $key => $question) {
    $jawaban_benar = $question['jawaban'];
    $jawaban_user = isset($answers[$key]) ? $answers[$key] : '';
    if (!empty($jawaban_user) && $jawaban_user === $jawaban_benar) {
        $skor += $question['skor'];
    }
}

// Save score and date to riwayat_pengerjaan table
if (isset($_SESSION['nama'], $_SESSION['email'])) {
    $nama = $_SESSION['nama'];
    $email = $_SESSION['email'];
    $tanggal = date('Y-m-d'); // Current date
    $sql_insert = "INSERT INTO riwayat_pengerjaan (nama, email, skor_akhir, tanggal) 
                   VALUES ('$nama', '$email', $skor, '$tanggal')";
    mysqli_query($db, $sql_insert);

    // Clear session variables
    unset($_SESSION['nama']);
    unset($_SESSION['email']);
}

// Optionally, you can provide feedback to the user here

// Close database connection
mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Konfirmasi Kuis</title>
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
            width: 1100px;
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
            width: 300px;
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

        .finish-button {
            background-color: #808080;
            color: white;
            padding: 5px 5px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 150px;
            margin-bottom: 10px;
            margin-left: 8px;
        }

        .next-button {
            background-color: #808080;
            color: white;
            padding: 5px 5px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 150px;
            margin-bottom: 10px;
        }

        .back-button {
            background-color: #808080;
            color: white;
            padding: 1px 5px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 150px;
            margin-bottom: 10px;
            margin-top: 5px;
            margin-left: 170px;
        }

        .send-button {
            background-color: #808080;
            color: white;
            padding: 5px 5px;
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
            margin-top: 5px;
        }

        .bottom-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 5px;
        }

        .bottom-buttons button {
            margin: 1px 0;
            text-align: center;
            width: 200px;
            padding: 7px;
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
            margin-left: 100px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 2px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 100px;
            margin-left: center;
        }

        .time-box {
            border: 2px solid #ccc;
            border-radius: 10px;
            border-color: red;
            padding: 20px;
            width: 200px;
            height: 35px;
            margin-left: 210px;
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
    <?php include 'navbar4.php'; ?><br><br>
    <div class="mt-5 mb-5">
        <img src="../img/kuislogo.png " alt="" class="small-img" style="margin-top: 70px; margin-left: 100px">
        <div class="text">
            <h4>Kuis PPh 21: Penghitungan PPh 21</h4>
        </div>
    </div>
    <div class="text mt-2">

    </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="box1">
            <div class="text-container mt-4 ml-4">
                <h4>Kuis PPh 21 Penghitungan PPh 21</h4>
                <h5>Rangkuman Jawaban</h5>
                <hr>
                <div class="questions">
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Status</th>
                        </tr>
                        <?php foreach ($questions as $key => $question) : ?>
                            <tr class="<?php echo $key % 2 == 0 ? 'odd' : ''; ?>">
                                <td><?php echo $key + 1; ?></td>
                                <td>
                                    <?php if (isset($answers[$key])) : ?>
                                        Jawaban disimpan
                                    <?php else : ?>
                                        Belum dijawab
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>

        </div>
        <div class="box3">
            <div class="button mt-1 ml-0">
                <div style="display: flex; flex-wrap: wrap;">
                    <?php foreach ($questions as $key => $question) : ?>
                        <?php if (isset($answers[$key])) : ?>
                            <button class="number-button text-center" style="width: 32px; height: 45px; margin: 7px; background-image: linear-gradient(to right, #4CAF50, #2196F3); color: white;">
                                <?php echo $key + 1; ?>
                            </button>
                        <?php else : ?>
                            <button class="number-button text-center" style="width: 32px; height: 45px; margin: 7px; background-color: #808080; color: white;">
                                <?php echo $key + 1; ?>
                            </button>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="bottom-buttons">
        <a href="quiz_pajak1.php"><button class="back-button">Kembali ke Soal</button></a>
        <form method="POST" action="hasil_kuis.php">
            <input type="hidden" name="skor" value="<?php echo $skor; ?>">
            <button type="submit" class="send-button">Kirim Jawaban</button>
        </form>

    </div>

</body>

<footer>
    <div class="footer">
        <p>&copy; Copyrights 2023 Polibatam</p>
    </div>
</footer>

</html>