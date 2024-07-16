<?php
session_start();
include 'navbar4.php';
include '../connection.php';

// Ganti dengan id quiz yang sesuai atau gunakan nilai dinamis
$quiz_id = 9;
$query_quiz_title = "SELECT judul_kuis FROM quiz_pajak WHERE id = ?";
$stmt_quiz_title = mysqli_prepare($db, $query_quiz_title);
mysqli_stmt_bind_param($stmt_quiz_title, "i", $quiz_id);
mysqli_stmt_execute($stmt_quiz_title);
mysqli_stmt_bind_result($stmt_quiz_title, $quizData);
mysqli_stmt_fetch($stmt_quiz_title);
mysqli_stmt_close($stmt_quiz_title);

// Ambil data riwayat pengerjaan dari tabel riwayat_pengerjaan
$query = "SELECT waktu_mulai, waktu_selesai, skor_akhir FROM riwayat_pengerjaan WHERE id_kuis = ?";
$stmt = mysqli_prepare($db, $query);
mysqli_stmt_bind_param($stmt, "i", $quiz_id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $waktu_mulai, $waktu_selesai, $skor_akhir);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);

// Mengonversi format waktu jika perlu
$waktu_mulai_formatted = date("l, d F Y H:i", strtotime($waktu_mulai));
$waktu_selesai_formatted = date("l, d F Y H:i", strtotime($waktu_selesai));

// Memeriksa apakah data riwayat pengerjaan ditemukan atau tidak
if (empty($waktu_mulai) || empty($waktu_selesai) || empty($skor_akhir)) {
    // Data tidak ditemukan atau kosong
    $mulai = "Data tidak ditemukan";
    $status = "Data tidak ditemukan";
    $selesai = "Data tidak ditemukan";
    $skor_akhir = "Data tidak ditemukan";
} else {
    // Data ditemukan, siapkan untuk ditampilkan
    $mulai = $waktu_mulai_formatted;
    $status = "Selesai";
    $selesai = $waktu_selesai_formatted;
    $skor_akhir = number_format((float)$skor_akhir, 2, '.', ''); // Format angka skor
}

// Fetch questions from database
$sql = "SELECT * FROM soal_pajak ORDER BY id";
$result = mysqli_query($db, $sql);
$questions = [];
while ($row = mysqli_fetch_assoc($result)) {
    $questions[] = $row;
}

$skor = isset($_SESSION['skor']) ? $_SESSION['skor'] : 0;
$answers = isset($_SESSION['answers']) ? $_SESSION['answers'] : [];
$answer_map = [
    '1' => 'A',
    '2' => 'B',
    '3' => 'C',
    '4' => 'D',
    '5' => 'E'
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluasi Kuis | Sudut Pajak</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .block {
            display: block;
            height: 50px;
            width: 8px;
            margin-right: 5px;
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }

        .card-border {
            border: 1px solid transparent !important;
            border-image: linear-gradient(41deg, #09c778, #01a0f9) 1 !important;
            border-radius: 10px;
            overflow: hidden;
        }

        .custom-card {
            background: linear-gradient(41deg, #09c778, #01a0f9);
            border-radius: 0px;
        }

        .card-nav {
            position: sticky;
            top: 20px;
            z-index: 1000;
        }

        .row-container {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .question-card {
            flex: 3;
        }

        .nav-card {
            flex: 0;
            margin-top: -20px;
        }

        .nav-card .btn {
            width: 30px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            background: linear-gradient(41deg, #09c778, #01a0f9);
            border: none;
        }

        .nav-card .card-title {
            font-size: 16px;
        }
    </style>

</head>

<body>
    <div class="main-panel">
        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <div class="d-flex align-items-center mb-3">
                    </div>
                </div>
                <br><br><br><br><br>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <svg class="me-3" id="kuis" height="40" viewBox="0 0 24 24" width="40" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                <defs>
                                    <linearGradient id="gradient" x1="0" y1="0" x2="1" y2="1" gradientTransform="rotate(41)">
                                        <stop offset="0%" stop-color="#09c778"></stop>
                                        <stop offset="100%" stop-color="#01a0f9"></stop>
                                    </linearGradient>
                                </defs>
                                <path fill="url(#gradient)" d="m20.389 4.268-2.657-2.657a5.462 5.462 0 0 0 -3.889-1.611h-6.343a5.506 5.506 0 0 0 -5.5 5.5v13a5.506 5.506 0 0 0 5.5 5.5h9a5.506 5.506 0 0 0 5.5-5.5v-10.343a5.464 5.464 0 0 0 -1.611-3.889zm-3.889 16.732h-9a2.5 2.5 0 0 1 -2.5-2.5v-13a2.5 2.5 0 0 1 2.5-2.5h5.5v4a2 2 0 0 0 2 2h4v9.5a2.5 2.5 0 0 1 -2.5 2.5zm.586-9.534a1.5 1.5 0 0 1 -.052 2.12l-3.586 3.414a3.5 3.5 0 0 1 -4.923-.025l-1.525-1.355a1.5 1.5 0 1 1 2-2.24l1.586 1.414a.584.584 0 0 0 .414.206.5.5 0 0 0 .353-.146l3.613-3.44a1.5 1.5 0 0 1 2.12.052z" />
                            </svg>
                            <h3><b><?php echo htmlspecialchars($quizData); ?></b></h3>
                        </div>

                        <div class="row-container">
                            <div class="question-card">
                                <div class="card card-border">
                                    <div class="card-body">
                                        <table class="table table-bordered table-sm">
                                            <tbody>
                                                <tr>
                                                    <td class="fw-bold bg-light">Waktu Mulai</td>
                                                    <td>
                                                        <?php
                                                        $waktu_mulai_timestamp = strtotime($mulai);
                                                        $hari_mulai = date('l', $waktu_mulai_timestamp);
                                                        $hari_mulai_indonesia = hari_indonesia($hari_mulai);
                                                        $tanggal_mulai = date('d', $waktu_mulai_timestamp);
                                                        $bulan_mulai = date('F', $waktu_mulai_timestamp);
                                                        $bulan_mulai_indonesia = bulan_indonesia($bulan_mulai);
                                                        $tahun_mulai = date('Y', $waktu_mulai_timestamp);
                                                        $jam_mulai = date('H:i', $waktu_mulai_timestamp);
                                                        echo htmlspecialchars($hari_mulai_indonesia . ', ' . $tanggal_mulai . ' ' . $bulan_mulai_indonesia . ' ' . $tahun_mulai . ' ' . $jam_mulai);
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold bg-light">Status Pengerjaan</td>
                                                    <td><?php echo htmlspecialchars($status); ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold bg-light">Waktu Selesai</td>
                                                    <td>
                                                        <?php
                                                        $waktu_selesai_timestamp = strtotime($selesai);
                                                        $hari_selesai = date('l', $waktu_selesai_timestamp);
                                                        $hari_selesai_indonesia = hari_indonesia($hari_selesai);
                                                        $tanggal_selesai = date('d', $waktu_selesai_timestamp);
                                                        $bulan_selesai = date('F', $waktu_selesai_timestamp);
                                                        $bulan_selesai_indonesia = bulan_indonesia($bulan_selesai);
                                                        $tahun_selesai = date('Y', $waktu_selesai_timestamp);
                                                        $jam_selesai = date('H:i', $waktu_selesai_timestamp);
                                                        echo htmlspecialchars($hari_selesai_indonesia . ', ' . $tanggal_selesai . ' ' . $bulan_selesai_indonesia . ' ' . $tahun_selesai . ' ' . $jam_selesai);
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold bg-light">Skor Akhir</td>
                                                    <td><b><?php echo htmlspecialchars($skor_akhir); ?>/100</b></td>
                                                </tr>

                                            </tbody>
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
                                                        return 'Hari tidak valid';
                                                }
                                            }

                                            function bulan_indonesia($month)
                                            {
                                                switch ($month) {
                                                    case 'January':
                                                        return 'Januari';
                                                    case 'February':
                                                        return 'Februari';
                                                    case 'March':
                                                        return 'Maret';
                                                    case 'April':
                                                        return 'April';
                                                    case 'May':
                                                        return 'Mei';
                                                    case 'June':
                                                        return 'Juni';
                                                    case 'July':
                                                        return 'Juli';
                                                    case 'August':
                                                        return 'Agustus';
                                                    case 'September':
                                                        return 'September';
                                                    case 'October':
                                                        return 'Oktober';
                                                    case 'November':
                                                        return 'November';
                                                    case 'December':
                                                        return 'Desember';
                                                    default:
                                                        return 'Bulan tidak valid';
                                                }
                                            }
                                            ?>

                                        </table>

                                        <!-- Dynamic Question Section -->
                                        <?php foreach ($questions as $key => $question) : ?>
                                            <div class="row g-5">
                                                <div class="col-lg-3 mt-3">
                                                    <div class="card card-border" id="soal-<?php echo $key + 1; ?>">
                                                        <div class="card-body">
                                                            <p class="fw-bold"><b>Pertanyaan <?php echo $key + 1; ?></b></p>
                                                            <p class="text-primary"><?php echo isset($answers[$key]) && $answers[$key] === $question['jawaban'] ? 'Benar' : ''; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 mt-3">
                                                    <div class="card card-border bg-light">
                                                        <div class="card-body">
                                                            <p><?php echo htmlspecialchars($question['soal']); ?></p>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="answer_<?php echo $question['id']; ?>" id="answer_<?php echo $question['id']; ?>_a" value="a" disabled <?php echo isset($answers[$key]) && $answers[$key] === 'a' ? 'checked' : ''; ?>>
                                                                <label class="form-check-label" for="answer_<?php echo $question['id']; ?>_a" style="font-weight: normal; color: black;">
                                                                    a. <?php echo htmlspecialchars($question['pilihan_a']); ?>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="answer_<?php echo $question['id']; ?>" id="answer_<?php echo $question['id']; ?>_b" value="b" disabled <?php echo isset($answers[$key]) && $answers[$key] === 'b' ? 'checked' : ''; ?>>
                                                                <label class="form-check-label" for="answer_<?php echo $question['id']; ?>_b" style="font-weight: normal; color: black;">
                                                                    b. <?php echo htmlspecialchars($question['pilihan_b']); ?>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="answer_<?php echo $question['id']; ?>" id="answer_<?php echo $question['id']; ?>_c" value="c" disabled <?php echo isset($answers[$key]) && $answers[$key] === 'c' ? 'checked' : ''; ?>>
                                                                <label class="form-check-label" for="answer_<?php echo $question['id']; ?>_c" style="font-weight: normal; color: black;">
                                                                    c. <?php echo htmlspecialchars($question['pilihan_c']); ?>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="answer_<?php echo $question['id']; ?>" id="answer_<?php echo $question['id']; ?>_d" value="d" disabled <?php echo isset($answers[$key]) && $answers[$key] === 'd' ? 'checked' : ''; ?>>
                                                                <label class="form-check-label" for="answer_<?php echo $question['id']; ?>_d" style="font-weight: normal; color: black;">
                                                                    d. <?php echo htmlspecialchars($question['pilihan_d']); ?>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="answer_<?php echo $question['id']; ?>" id="answer_<?php echo $question['id']; ?>_e" value="e" disabled <?php echo isset($answers[$key]) && $answers[$key] === 'e' ? 'checked' : ''; ?>>
                                                                <label class="form-check-label" for="answer_<?php echo $question['id']; ?>_e" style="font-weight: normal; color: black;">
                                                                    e. <?php echo htmlspecialchars($question['pilihan_e']); ?>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="custom-card mt-3 text-white mb-4">
                                                        <div class="card-body">


                                                            <?php
                                                            // Pastikan $question['jawaban'] sudah tersedia dari tabel soal_pajak
                                                            $jawaban_benar = isset($question['jawaban']) ? htmlspecialchars($question['jawaban']) : 'Tidak tersedia';
                                                            ?>
                                                            <p>Jawaban Benar : <?php echo $jawaban_benar; ?></p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="flex justify-center items-center mt-10 text-center">
                                    <a class="btn" href="hasil_kuis.php" style="background-image: linear-gradient(135deg, #09c778, #01a0f9); color: #fff;">
                                        Selesaikan Evaluasi
                                    </a>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="block">
        <script src="script.js"></script>
    </div>
</body>

</html>