function loadQuestion(id) {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "quiz_logic.php?action=load_question&id=" + id, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("quiz-container").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function selectAnswer(questionIndex, answer) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "quiz_logic.php?action=save_answer", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("answer-status").innerText = "Jawaban telah disimpan"; // ID yang seharusnya ada di HTML
        }
    };
    xhr.send("index=" + questionIndex + "&answer=" + answer);
}

function previousQuestion() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "quiz_logic.php?action=previous_question", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("quiz-container").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function nextQuestion() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "quiz_logic.php?action=next_question", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            document.getElementById("quiz-container").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function finishQuiz() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "quiz_logic.php?action=finish_quiz", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
            window.location.href = "quiz2_pajak.php";
        }
    };
    xhr.send();
}
