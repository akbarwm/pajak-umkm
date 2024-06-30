<?php
include("../connection.php");
session_start();

// Fungsi untuk mengambil pertanyaan berdasarkan ID
function getQuestionById($db, $id)
{
    $sql = "SELECT * FROM quiz_pajak WHERE id = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_assoc($result);
}

// Fungsi untuk mengambil semua pertanyaan
function getAllQuestions($db)
{
    $sql = "SELECT * FROM quiz_pajak";
    $result = mysqli_query($db, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return null;
    }
}

// Inisialisasi variabel sesi jika belum ada
if (!isset($_SESSION['question_index'])) {
    $_SESSION['question_index'] = 0; // Inisialisasi indeks pertanyaan ke 0
}

// Fungsi untuk menghitung skor berdasarkan jawaban
function calculateScore($answers, $questions)
{
    $score = 0;
    foreach ($answers as $index => $answer) {
        if (isset($questions[$index]) && $answer === $questions[$index]['jawaban_benar']) {
            $score++;
        }
    }
    return $score;
}

// Mengatur akses ke halaman berdasarkan aksi yang diterima
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action'])) {
    if ($_GET['action'] === 'load_question' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $question = getQuestionById($db, $id);
        if ($question) {
            $current_index = array_search($id, array_column($_SESSION['questions'], 'id'));
            $_SESSION['question_index'] = $current_index;
            $selected_answer = isset($_SESSION['answers'][$current_index]) ? $_SESSION['answers'][$current_index] : '';

            echo "<p>{$question['soal']}</p>";
            foreach (['jawaban_a', 'jawaban_b', 'jawaban_c', 'jawaban_d'] as $option) {
                echo "<label><input type='radio' name='jawaban' value='{$question[$option]}' onclick='selectAnswer($current_index, \"{$question[$option]}\")' ";
                echo ($selected_answer == $question[$option]) ? 'checked' : '';
                echo "> {$question[$option]}</label><br>";
            }
        } else {
            echo "Pertanyaan tidak ditemukan.";
        }
        exit;
    } elseif ($_GET['action'] === 'next_question') {
        $questions = $_SESSION['questions'];
        $total_questions = count($questions);
        $current_index = $_SESSION['question_index'];
        $_SESSION['question_index'] = ($current_index + 1) % $total_questions;
        $current_index = $_SESSION['question_index'];

        $row = $questions[$current_index];
        $selected_answer = isset($_SESSION['answers'][$current_index]) ? $_SESSION['answers'][$current_index] : '';

        echo "<p>{$row['soal']}</p>";
        foreach (['jawaban_a', 'jawaban_b', 'jawaban_c', 'jawaban_d'] as $option) {
            echo "<label><input type='radio' name='jawaban' value='{$row[$option]}' onclick='selectAnswer($current_index, \"{$row[$option]}\")' ";
            echo ($selected_answer == $row[$option]) ? 'checked' : '';
            echo "> {$row[$option]}</label><br>";
        }
        exit;
    } elseif ($_GET['action'] === 'previous_question') {
        if (isset($_SESSION['question_index']) && $_SESSION['question_index'] > 0) {
            $_SESSION['question_index']--;
            $current_index = $_SESSION['question_index'];
            $row = $_SESSION['questions'][$current_index];
            $selected_answer = isset($_SESSION['answers'][$current_index]) ? $_SESSION['answers'][$current_index] : '';

            echo "<p>{$row['soal']}</p>";
            foreach (['jawaban_a', 'jawaban_b', 'jawaban_c', 'jawaban_d'] as $option) {
                echo "<label><input type='radio' name='jawaban' value='{$row[$option]}' onclick='selectAnswer($current_index, \"{$row[$option]}\")' ";
                echo ($selected_answer == $row[$option]) ? 'checked' : '';
                echo "> {$row[$option]}</label><br>";
            }
        } else {
            echo "Tidak ada pertanyaan sebelumnya.";
        }
        exit;
    } elseif ($_GET['action'] === 'finish_quiz') {
        $nama = isset($_SESSION['name']) ? mysqli_real_escape_string($db, $_SESSION['name']) : "Nama Pengguna";
        $email = isset($_SESSION['email']) ? mysqli_real_escape_string($db, $_SESSION['email']) : "email@example.com";
        $skor = calculateScore($_SESSION['answers'], $_SESSION['questions']);
        $tanggal = date('Y-m-d H:i:s');

        foreach ($_SESSION['questions'] as $index => $question) {
            $no_soal = $question['no_soal'];
            $soal = $question['soal'];
            $jawaban = isset($_SESSION['answers'][$index]) ? $_SESSION['answers'][$index] : '';
            $jawaban_benar = $question['jawaban_benar'];

            $sql = "INSERT INTO riwayat_pengerjaan (nama, email, skor_akhir, tanggal) 
            VALUES ('$nama', '$email', '$skor', '$tanggal')";
            mysqli_query($db, $sql);
        }

        unset($_SESSION['question_index']);
        unset($_SESSION['answers']);
        unset($_SESSION['questions']);

        echo "Kuis telah selesai. Terima kasih!";
        exit;
    }
}

// Memproses jawaban yang disimpan
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'save_answer') {
    if (isset($_POST['index']) && isset($_POST['answer'])) {
        $index = $_POST['index'];
        $answer = $_POST['answer'];
        $_SESSION['answers'][$index] = $answer;
        echo "Jawaban telah disimpan";
        exit;
    }
}

// Memuat pertanyaan untuk kuis
$questions = getAllQuestions($db);
if ($questions) {
    $_SESSION['questions'] = $questions;
    $current_index = isset($_SESSION['question_index']) ? $_SESSION['question_index'] : 0;
    $row = $questions[$current_index];
    $selected_answer = isset($_SESSION['answers'][$current_index]) ? $_SESSION['answers'][$current_index] : '';
} else {
    echo "Data tidak ditemukan.";
    exit;
}
