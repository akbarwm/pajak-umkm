<!DOCTYPE html>
<html lang="en">
<head>
    <style>
          body {
            background: linear-gradient(-41deg, #09c778, #01a0f9) !important;
            font-family: Arial, sans-serif;
        }
        .quiz-container {
            max-width: 600px;
            margin: 10% auto;
            padding: 20px;
            background-color: #ffffff; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
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

        h1 {
            font-size: 24px; 
        }
        
        p {
            font-size: 16px; 
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Kuis</title>
</head>
<body>
    <?php include 'konsultasi/navbar4.php'; ?><br><br>
    <div class="quiz-container"><br>
        <center><h3>Selamat Datang</h3></center>
        <center><p>Selamat mengerjakan, jangan lupa berdoa dulu.</p></center>
        <form id="quiz-form" action="quiz_pajak.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required pattern="[A-Za-z\s]+" title="Nama harus terdiri dari huruf saja" />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php include 'layout/footer.php'; ?>
</body>
</html>
