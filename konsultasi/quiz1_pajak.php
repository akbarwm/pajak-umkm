<?php
include("../connection.php");
session_start();

if (!isset($_SESSION['question_index'])) {
    $_SESSION['question_index'] = 0;
}

if (!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = array();
}

// Ambil data dari table users kolom nama dan email
$sql = "SELECT nama, email FROM users WHERE id = ?";
$stmt = mysqli_prepare($db, $sql);
mysqli_stmt_bind_param($stmt, "i", $users_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $nama = mysqli_real_escape_string($db, $row['nama']);
    $email = mysqli_real_escape_string($db, $row['email']);
} else {
    $nama = "Nama Pengguna";
    $email = "email@example.com";
}

function getQuestions($db, $id = null) {
    if ($id !== null) {
        $sql = "SELECT * FROM quiz_pajak WHERE id = ?";
        $stmt = mysqli_prepare($db, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return mysqli_fetch_assoc($result); // Mengembalikan array asosiatif tunggal
    } else {
        $sql = "SELECT * FROM quiz_pajak";
        $result = mysqli_query($db, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC); // Mengembalikan seluruh baris sebagai array asosiatif
        } else {
            return null;
        }
    }
}


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'load_question' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $question = getQuestions($db, $id);
        if ($question) {
            $current_index = array_search($id, array_column($_SESSION['questions'], 'id'));
            $_SESSION['question_index'] = $current_index;
            $selected_answer = isset($_SESSION['answers'][$current_index]) ? $_SESSION['answers'][$current_index] : '';

            ?>
            <div class="text-left mt-4">
                <h4 class="no-margin" name="no_soal">Pertanyaan <?php echo htmlspecialchars($question['no_soal']); ?></h4>
                <p id="answer-status"><span class="red-text">
                    <?php echo $selected_answer ? 'Jawaban telah disimpan' : 'Tidak ada jawaban'; ?>
                </span></p>
            </div>
            <div class="text-container mt-4">
                <p><span class="lowered-text" name="soal"><?php echo htmlspecialchars($question['soal']); ?></span></p>
                <div class="radio-container">
                    <form>
                        <input type="radio" id="option1" name="jawaban" value="a" <?php if ($selected_answer == 'a') echo 'checked'; ?> onclick="selectAnswer(<?php echo $current_index; ?>, 'a')">
                        <label for="option1"><?php echo htmlspecialchars($question['jawaban_a']); ?></label><br>
                        <input type="radio" id="option2" name="jawaban" value="b" <?php if ($selected_answer == 'b') echo 'checked'; ?> onclick="selectAnswer(<?php echo $current_index; ?>, 'b')">
                        <label for="option2"><?php echo htmlspecialchars($question['jawaban_b']); ?></label><br>
                        <input type="radio" id="option3" name="jawaban" value="c" <?php if ($selected_answer == 'c') echo 'checked'; ?> onclick="selectAnswer(<?php echo $current_index; ?>, 'c')">
                        <label for="option3"><?php echo htmlspecialchars($question['jawaban_c']); ?></label><br>
                        <input type="radio" id="option4" name="jawaban" value="d" <?php if ($selected_answer == 'd') echo 'checked'; ?> onclick="selectAnswer(<?php echo $current_index; ?>, 'd')">
                        <label for="option4"><?php echo htmlspecialchars($question['jawaban_d']); ?></label><br>
                    </form>
                </div>
            </div>
            <?php
        } else {
            echo "Pertanyaan tidak ditemukan.";
        }
        exit;
    } elseif ($_GET['action'] == 'next_question') {
        $questions = $_SESSION['questions'];
        $total_questions = count($questions);
        $current_index = $_SESSION['question_index'];
        $_SESSION['question_index'] = ($current_index + 1) % $total_questions;
        $current_index = $_SESSION['question_index'];

        $row = $questions[$current_index];
        $selected_answer = isset($_SESSION['answers'][$current_index]) ? $_SESSION['answers'][$current_index] : '';

        ?>
        <div class="text-left mt-4">
            <h4 class="no-margin" name="no_soal">Pertanyaan <?php echo htmlspecialchars($row['no_soal']); ?></h4>
            <p id="answer-status"><span class="red-text">
                <?php echo $selected_answer ? 'Jawaban telah disimpan' : 'Tidak ada jawaban'; ?>
            </span></p>
        </div>
        <div class="text-container mt-4">
            <p><span class="lowered-text" name="soal"><?php echo htmlspecialchars($row['soal']); ?></span></p>
            <div class="radio-container">
                <form>
                    <input type="radio" id="option1" name="jawaban" value="a" <?php if ($selected_answer == 'a') echo 'checked'; ?> onclick="selectAnswer(<?php echo $current_index; ?>, 'a')">
                    <label for="option1"><?php echo htmlspecialchars($row['jawaban_a']); ?></label><br>
                    <input type="radio" id="option2" name="jawaban" value="b" <?php if ($selected_answer == 'b') echo 'checked'; ?> onclick="selectAnswer(<?php echo $current_index; ?>, 'b')">
                    <label for="option2"><?php echo htmlspecialchars($row['jawaban_b']); ?></label><br>
                    <input type="radio" id="option3" name="jawaban" value="c" <?php if ($selected_answer == 'c') echo 'checked'; ?> onclick="selectAnswer(<?php echo $current_index; ?>, 'c')">
                    <label for="option3"><?php echo htmlspecialchars($row['jawaban_c']); ?></label><br>
                    <input type="radio" id="option4" name="jawaban" value="d" <?php if ($selected_answer == 'd') echo 'checked'; ?> onclick="selectAnswer(<?php echo $current_index; ?>, 'd')">
                    <label for="option4"><?php echo htmlspecialchars($row['jawaban_d']); ?></label><br>
                </form>
            </div>
        </div>
        <?php
        exit;
    } elseif ($_GET['action'] == 'finish_quiz') {
        // Simpan riwayat pengerjaan ke database
        $nama = mysqli_real_escape_string($db, $_SESSION['name']); // Ganti dengan session nama yang sesuai
        $email = mysqli_real_escape_string($db, $_SESSION['email']); // Ganti dengan session email yang sesuai
        $skor = calculateScore($_SESSION['answers']); // Ganti dengan fungsi perhitungan skor sesuai dengan jawaban
        $tanggal = date('Y-m-d H:i:s');
        
        $questions = $_SESSION['questions'];
        $answers = $_SESSION['answers'];
        foreach ($questions as $index => $question) {
            $no_soal = $question['no_soal'];
            $soal = $question['soal'];
            $jawaban = isset($answers[$index]) ? $answers[$index] : '';
            $jawaban_benar = $question['jawaban_benar'];
            
            $sql = "INSERT INTO riwayat_pengerjaan (nama, email, skor, tanggal, no_soal, soal, jawaban, jawaban_benar) VALUES ('$nama', '$email', '$skor', '$tanggal', '$no_soal', '$soal', '$jawaban', '$jawaban_benar')";
            mysqli_query($db, $sql);
        }
        
        // Reset session
        unset($_SESSION['question_index']);
        unset($_SESSION['answers']);
        unset($_SESSION['questions']);
        
        echo "Kuis telah selesai. Terima kasih!";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['action']) && $_GET['action'] == 'save_answer') {
    if (isset($_POST['index']) && isset($_POST['answer'])) {
        $index = $_POST['index'];
        $answer = $_POST['answer'];
        $_SESSION['answers'][$index] = $answer;
        echo "Jawaban telah disimpan";
        exit;
    }
}

$questions = getQuestions($db);
if ($questions) {
    $_SESSION['questions'] = $questions;
    $current_index = isset($_SESSION['question_index']) ? $_SESSION['question_index'] : 0;
    $row = $questions[$current_index];
    $selected_answer = isset($_SESSION['answers'][$current_index]) ? $_SESSION['answers'][$current_index] : '';
} else {
    echo "Data tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Quiz</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <link rel="stylesheet" type="text/css" href="csskuis.css">
    <script>
        function loadQuestion(id) {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "quiz1_pajak.php?action=load_question&id=" + id, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("quiz-container").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        function nextQuestion() {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "quiz1_pajak.php?action=next_question", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("quiz-container").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        function finishQuiz() {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "quiz1_pajak.php?action=finish_quiz", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    alert(xhr.responseText); // Tampilkan pesan hasil selesai kuis
                    window.location.href = "index.php"; // Redirect ke halaman lain setelah selesai
                }
            };
            xhr.send();
        }

        function selectAnswer(questionIndex, answer) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "quiz1_pajak.php?action=save_answer", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("answer-status").innerText = "Jawaban telah disimpan";
                }
            };
            xhr.send("index=" + questionIndex + "&answer=" + answer);
        }
    </script>
</head>

<body>
    <br>
    <div class="mt-4 mb-5 header">
        <img src="../../img/image.png" alt="" class="small-img">
        <div class="text">
            <h4>KUIS PPh 21: PENGHITUNGAN PPh 21</h4>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 order-2">
                <div id="quiz-container" class="box">
                    <div class="text-container mt-4">
                        <div class="text-left mt-4">
                            <h4 class="no-margin" name="no_soal">Pertanyaan <?php echo htmlspecialchars($row['no_soal']); ?></h4>
                            <p id="answer-status"><span class="red-text">
                                <?php echo $selected_answer ? 'Jawaban telah disimpan' : 'Tidak ada jawaban'; ?>
                            </span></p>
                        </div>
                        <p><span class="lowered-text" name="soal"><?php echo htmlspecialchars($row['soal']); ?></span></p>
                        <div class="radio-container">
                            <form>
                                <input type="radio" id="option1" name="jawaban" value="a" <?php if ($selected_answer == 'a') echo 'checked'; ?> onclick="selectAnswer(<?php echo $current_index; ?>, 'a')">
                                <label for="option1"><?php echo htmlspecialchars($row['jawaban_a']); ?></label><br>
                                <input type="radio" id="option2" name="jawaban" value="b" <?php if ($selected_answer == 'b') echo 'checked'; ?> onclick="selectAnswer(<?php echo $current_index; ?>, 'b')">
                                <label for="option2"><?php echo htmlspecialchars($row['jawaban_b']); ?></label><br>
                                <input type="radio" id="option3" name="jawaban" value="c" <?php if ($selected_answer == 'c') echo 'checked'; ?> onclick="selectAnswer(<?php echo $current_index; ?>, 'c')">
                                <label for="option3"><?php echo htmlspecialchars($row['jawaban_c']); ?></label><br>
                                <input type="radio" id="option4" name="jawaban" value="d" <?php if ($selected_answer == 'd') echo 'checked'; ?> onclick="selectAnswer(<?php echo $current_index; ?>, 'd')">
                                <label for="option4"><?php echo htmlspecialchars($row['jawaban_d']); ?></label><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 order-3">
                <div class="button mt-4">
                    <ol>
                        <?php foreach ($questions as $question): ?>
                            <button class="number-button" onclick="loadQuestion(<?php echo $question['id']; ?>)"><?php echo htmlspecialchars($question['no_soal']); ?></button>
                        <?php endforeach; ?>
                    </ol>
                    <button class="next-button" onclick="nextQuestion()">Selanjutnya</button>
                    <button class="finish-button" onclick="finishQuiz()">Selesai</button>
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
