<?php
session_start();
include 'navbar4.php';
include '../connection.php';
if (!isset($_SESSION['nama'])) {
    // Jika tidak ada, redirect ke form_kuis.php
    header('Location: form_kuis.php');
    exit();
}

$sql = "SELECT * FROM soal_pajak ORDER BY id";
$result = mysqli_query($db, $sql);
$questions = [];
while ($row = mysqli_fetch_assoc($result)) {
    $questions[] = $row;
}
$first_question = isset($questions[0]) ? $questions[0] : null;

$sql_quiz = "SELECT waktu FROM quiz_pajak WHERE id = 9";
$result_quiz = mysqli_query($db, $sql_quiz);
if ($result_quiz) {
    $quiz_data = mysqli_fetch_assoc($result_quiz);
    $quiz_time = (int) $quiz_data['waktu'];
} else {
    echo "Error fetching quiz time: " . mysqli_error($db);
    exit();
}
// Di halaman quiz_pajak1.php, ambil jawaban dari session jika ada
if (isset($_SESSION['jawaban'])) {
    $jawaban = $_SESSION['jawaban'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Quiz</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <style>
        .single-about {
            height: 300px;
        }

        .single-about>p {
            color: black;
        }

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

        .box {
            width: 18%;
            max-width: 1030px;
            height: 150px;
            background-color: white;
            border: 20px solid transparent;
            background-clip: padding-box;
            border-radius: 30px;
            margin-top: 80px;
            position: relative;
            margin-left: -40px;
        }

        .box::before {
            content: "";
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(to top, #289C5E, #4FA2ED);
            z-index: -1;
            border-radius: 20px;
        }

        .box1 {
            width: 850px;
            max-width: 1350px;
            height: 450px;
            background-color: white;
            border: 10px solid transparent;
            background-clip: padding-box;
            border-radius: 10px;
            margin: auto;
            margin-top: -130px;
            margin-left: 250px;
            position: relative;
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
            max-width: 1350px;
            height: 230px;
            background-color: white;
            border: 10px solid transparent;
            background-clip: padding-box;
            border-radius: 10px;
            margin: auto;
            margin-top: -325px;
            margin-left: 885px;
            position: relative;

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

        .big-img {
            position: absolute;
            margin-right: 100px;
            margin-top: 50px;
            width: 1200px;
            height: auto;
        }

        .text-bold {
            font-weight: 900;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 100px;
            margin-left: 5px;
        }

        .footer p {
            margin: -100px;
            color: black;
        }

        .red-text {
            color: red;
            margin-bottom: 590px;
        }

        .no-margin {
            margin-bottom: 0;
        }

        .lowered-text {
            margin-top: 400px;
        }

        .time-box {
            border: 2px solid #ccc;
            border-radius: 10px;
            border-color: red;
            padding: 10px;
            width: 170px;
            height: 40px;
            margin-left: 650px;
            margin-top: 20px;
            display: inline-block;
            font-weight: 800;
        }

        .input[type="radio"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #3498db;
            border-radius: 50%;
            outline: none;
            margin-right: 5px;
        }

        .number-button {
            background-color: #4CAF50;
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 10%;
            cursor: pointer;
            margin: 5px;
        }

        .number-list {
            list-style-type: none;
            padding-left: 0;
            display: flex;
            flex-wrap: wrap;
        }

        .number-list li {
            flex: 0 0 calc(20% - 10px);
            margin-bottom: 1px;
            margin-left: 7px;
            justify-content: flex-start;
        }

        .number-button1 {
            margin-left: -50px;
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
            padding: 5px 12px;
            border-radius: 10%;
        }

        .number-button2 {
            margin-left: 10px;
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
            padding: 5px 10px;
            border-radius: 10%;
        }

        .number-button3 {
            margin-left: 10px;
            background-image: linear-gradient(to right, #4CAF50, #2196F3);

            padding: 5px 10px;
            border-radius: 10%;
        }

        .number-button4 {
            margin-left: 10px;
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
            padding: 5px 10px;
            border-radius: 10%;
        }

        .number-button5 {
            margin-right: auto;
            margin-left: -50px;
            display: block;

            margin-top: 20px;
            padding: 5px 10px;
            border-radius: 10%;
        }

        .finish-button {
            background-color: #4CAF50;
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
            color: white;
            padding: 5px 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 40px;
            margin-left: 80px;
            width: 100px;
        }

        .radio-container {
            display: flex;
            flex-direction: row;
        }

        .radio-container input[type="radio"],
        .radio-container label {
            margin-right: 10px;
        }

        .awal-button {

            background-color: #808080;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 20px;
            cursor: pointer;
            margin-top: 250px;
            margin-left: -845px;
            width: 150px;
        }

        .next-button {
            background-color: #4CAF50;
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
            padding: 5px 20px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 250px;
            margin-left: -210px;
            width: 150px;
        }

        .number-button.not-answered {
            background-color: #808080;
            background-image: none;
        }
    </style>
</head>

<body>

    <div class="mt-5 mb-5">
        <img src="../img/kuislogo.png " alt="" class="small-img" style="margin-top: 70px; margin-left: 100px">
        <div class="text">
            <h4>Kuis PPh 21: Penghitungan PPh 21</h4>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="box">
            <div class="text-left mt-4 ml-4">
                <h4 class="no-margin" name="no_soal">Pertanyaan</h4>
                <p><span id="answerStatus" class="red-text">Tidak ada jawaban</span></p>
            </div>
            <div class="container mt-5 mb-5">
                <div class="box1">
                    <div class="time-box">
                        <p id="timeRemaining">Sisa Waktu <?php echo sprintf('%02d:%02d', floor($quiz_time / 60), $quiz_time % 60); ?></p>
                    </div>

                    <div id="quiz-container">
                        <div class="text-container mt-4 ml-4">
                            <p><span class="lowered-text" name="soal"><?php echo htmlspecialchars($first_question['soal']); ?></span></p>
                            <div class="radio-container">
                                <form id="quiz-form">
                                    <input type="radio" id="option1" name="jawaban" value="a">a.
                                    <label for="option1"><?php echo htmlspecialchars($first_question['pilihan_a']); ?></label><br>
                                    <input type="radio" id="option2" name="jawaban" value="b">b.
                                    <label for="option2"><?php echo htmlspecialchars($first_question['pilihan_b']); ?></label><br>
                                    <input type="radio" id="option3" name="jawaban" value="c">c.
                                    <label for="option3"><?php echo htmlspecialchars($first_question['pilihan_c']); ?></label><br>
                                    <input type="radio" id="option4" name="jawaban" value="d">d.
                                    <label for="option4"><?php echo htmlspecialchars($first_question['pilihan_d']); ?></label><br>
                                    <input type="radio" id="option5" name="jawaban" value="e">e.
                                    <label for="option5"><?php echo htmlspecialchars($first_question['pilihan_e']); ?></label><br>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="box3">
                        <div class="button">
                            <ol class="number-list">
                                <?php foreach ($questions as $index => $question) : ?>
                                    <li><button class="number-button" onclick="loadQuestion(<?php echo $index; ?>)"><?php echo htmlspecialchars($index + 1); ?></button></li>
                                <?php endforeach; ?>
                            </ol>
                            <button class="finish-button" onclick="finishQuiz()">Selesai</button>
                        </div>
                        <button class="next-button" onclick="nextQuestion()">Selanjutnya</button>
                        <button class="awal-button" onclick="previousQuestion()">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>

    <footer>
        <div class="footer">
            <p>&copy; Copyrights 2023 Polibatam</p>
        </div>
    </footer>

    <script>
        var quizTime = <?php echo $quiz_time; ?>;
        var countDownDate = new Date();
        countDownDate.setMinutes(countDownDate.getMinutes() + quizTime);

        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var minutes = Math.floor(distance / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            var formattedMinutes = minutes.toString().padStart(2, '0');
            var formattedSeconds = seconds.toString().padStart(2, '0');

            document.getElementById("timeRemaining").innerHTML = "Sisa waktu " + formattedMinutes + ":" + formattedSeconds;

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("timeRemaining").innerHTML = "Waktu Habis";
                alert('Waktu sudah habis!');
            }
        }, 1000);
    </script>

    <script>
        var questions = <?php echo json_encode($questions); ?>;
        var currentQuestionIndex = 0;
        var selectedAnswers = {};

        function loadQuestion(index) {
            currentQuestionIndex = index;
            var question = questions[index];
            document.querySelector('[name="no_soal"]').textContent = "Pertanyaan " + (index + 1);
            document.querySelector('[name="soal"]').textContent = question.soal;
            document.getElementById('option1').nextElementSibling.textContent = question.pilihan_a;
            document.getElementById('option2').nextElementSibling.textContent = question.pilihan_b;
            document.getElementById('option3').nextElementSibling.textContent = question.pilihan_c;
            document.getElementById('option4').nextElementSibling.textContent = question.pilihan_d;
            document.getElementById('option5').nextElementSibling.textContent = question.pilihan_e;

            var selectedAnswer = selectedAnswers[currentQuestionIndex];
            if (selectedAnswer) {
                document.getElementById('option' + selectedAnswer).checked = true;
            } else {
                clearRadioSelection();
            }

            updateAnswerStatus();
            toggleBackButtonVisibility();

            var numberButtons = document.querySelectorAll('.number-button');
            numberButtons.forEach(button => {
                var questionIndex = parseInt(button.textContent) - 1;
                if (!selectedAnswers[questionIndex]) {
                    button.classList.add('not-answered');
                } else {
                    button.classList.remove('not-answered');
                }
            });

            var radios = document.getElementsByName('jawaban');
            radios.forEach(radio => {
                radio.addEventListener('change', function() {
                    saveAnswer();
                    updateAnswerStatus();
                    var currentButton = document.querySelector('.number-button:nth-child(' + (currentQuestionIndex + 1) + ')');
                    currentButton.classList.remove('not-answered');
                });
            });
        }

        function nextQuestion() {
            saveAnswer();
            if (currentQuestionIndex < questions.length - 1) {
                currentQuestionIndex++;
                loadQuestion(currentQuestionIndex);
                if (currentQuestionIndex === questions.length - 1) {
                    document.querySelector('.next-button').textContent = 'Selesai';
                    document.querySelector('.next-button').setAttribute('onclick', 'finishQuiz()');
                }
            }
        }

        function previousQuestion() {
            saveAnswer();
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                loadQuestion(currentQuestionIndex);
                if (currentQuestionIndex < questions.length - 1) {
                    document.querySelector('.next-button').textContent = 'Selanjutnya';
                    document.querySelector('.next-button').setAttribute('onclick', 'nextQuestion()');
                }
            }
        }

        function saveAnswer() {
            var radios = document.getElementsByName('jawaban');
            var answerSaved = false;

            for (var i = 0; i < radios.length; i++) {
                if (radios[i].checked) {
                    selectedAnswers[currentQuestionIndex] = i + 1;
                    answerSaved = true;
                    break;
                }
            }

            if (!answerSaved) {
                delete selectedAnswers[currentQuestionIndex];
            }

            updateAnswerStatus();
        }

        function updateAnswerStatus() {
            var answerStatus = document.getElementById('answerStatus');
            if (selectedAnswers[currentQuestionIndex]) {
                answerStatus.textContent = 'Jawaban disimpan';
                answerStatus.classList.remove('red-text');
            } else {
                answerStatus.textContent = 'Tidak ada jawaban';
                answerStatus.classList.add('red-text');
            }
        }

        function finishQuiz() {
            saveAnswer();

            // Create a form element
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = 'konfirmasikuis.php';

            // Append the selected answers to the form as hidden inputs
            for (var questionIndex in selectedAnswers) {
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'answers[' + questionIndex + ']';
                input.value = selectedAnswers[questionIndex];
                form.appendChild(input);
            }

            // Append the form to the body and submit it
            document.body.appendChild(form);
            form.submit();
        }

        function clearRadioSelection() {
            var radios = document.getElementsByName('jawaban');
            for (var i = 0; i < radios.length; i++) {
                radios[i].checked = false;
            }
        }

        function toggleBackButtonVisibility() {
            var backButton = document.querySelector('.awal-button');
            if (currentQuestionIndex === 0) {
                backButton.style.display = 'none';
            } else {
                backButton.style.display = 'inline-block';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            loadQuestion(0);
        });
    </script>

</body>

</html>