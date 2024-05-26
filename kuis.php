<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		.quiz-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] {
    background-color: #289C5E;
    color: #fff;
    padding: 10px 20px;
	margin: 15px 10px; 
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #4FA2DE;
}

.quiz-container {
    max-width: 600px;
    margin: 10% auto;
    padding: 20px;
}

	</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis</title>
	
</head>
<body>
    
    <?php include 'konsultasi/navbar4.php';?>
    <div class="quiz-container">
        <h1>Selamat Datang</h1>
		<p>Selamat mengerjakan, jangan lupa berdoa dulu.</p>
        <form id="quiz-form" action="submit_quiz.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required pattern="[A-Za-z\s]+" title="Nama harus terdiri dari huruf saja" />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />
            </div>
            <!-- Tambahkan pertanyaan-pertanyaan kuis di sini -->
            <button type="submit">Submit</button>
        </form>
    </div>

    <?php include 'layout/footer.php'; ?>
</body>
</html>
