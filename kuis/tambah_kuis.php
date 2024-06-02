<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah kuis |</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../style2.css"> <!-- Perbaiki tautan CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;
            padding: 90px; /* Tambahkan padding agar tidak terlalu rapat dengan sisi layar */
        }

        .tambah-kuis {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%; /* Ubah lebar sesuai kebutuhan */
            max-width: 800px; /* Tambahkan batas maksimum lebar */
            margin: auto; /* Tengahkan tabel */
        }

        .tambah-kuis h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .tambah-kuis label {
            font-weight: bold;
            display: block; /* Agar label tampil sebagai blok */
            margin-bottom: 5px; /* Berikan margin bawah untuk memberikan jarak antar label */
        }

        .tambah-kuis input[type="text"],
        .tambah-kuis input[type="number"],
        .tambah-kuis textarea {
            width: calc(100% - 20px); /* Agar input memanjang sampai ke ujung tabel dengan dikurangi padding */
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-right: 10px; /* Berikan margin kanan agar input terpisah */
        }

        .tambah-kuis textarea {
            height: 100px; /* Atur tinggi textarea sesuai kebutuhan */
            resize: vertical; /* Biarkan pengguna dapat meresize secara vertikal */
        }

        .tambah-kuis button {
            width: calc(100% - 20px); /* Agar tombol memanjang sampai ke ujung tabel dengan dikurangi padding */
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px; /* Berikan margin atas agar tombol terpisah dari input */
        }

        .tambah-kuis button:hover {
            background-color: #45a049;
        }

        /* Style untuk tabel */
        .tambah-kuis table {
            width: 100%;
            border-collapse: collapse; /* Agar border antar sel menyatu */
        }

        .tambah-kuis table tr:nth-child(even) {
            background-color: #f2f2f2; /* Warna latar belakang untuk baris genap */
        }

        .tambah-kuis table td, .tambah-kuis table th {
            padding: 8px;
            border: 1px solid #ddd; /* Garis batas antar sel */
        }

        .tambah-kuis table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50; /* Warna latar belakang untuk sel header */
            color: white;
        }

        @media screen and (max-width: 600px) {
            /* Atur tata letak untuk layar dengan lebar maksimum 600px */
            .tambah-kuis table tr {
                display: block; /* Setiap baris menjadi blok */
                margin-bottom: 10px; /* Berikan margin bawah antar baris */
            }
            .tambah-kuis table td, .tambah-kuis table th {
                display: block; /* Setiap sel menjadi blok */
                width: 100%; /* Sel memenuhi lebar tabel */
                text-align: left; /* Teks selalu kiri */
            }
        }
    </style>
</head>

<body>
    <?php include './layout/sidebar.php'; ?>

    <div class="main-panel">
        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Tambah Kuis</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="index.php">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tambah-kuis"> <!-- Perbaiki class name -->
                    <form action="#" method="POST">
                        <h1>Tambah Kuis</h1> <!-- Perbaiki tag h2 -->
                        <hr>
                        <table>
                            <tr>
                                <td><label for="No">NO</label></td>
                                <td><input type="number" name="No" placeholder="Masukan Nomor Soal"></td>
                            </tr>
                            <tr>
                                <td><label for="Soal">Soal</label></td>
                                <td><textarea name="Soal" placeholder="Masukan Soal yang Anda"></textarea></td>
                            </tr>
                            <tr>
                                <td><label for="JawabanA">JAWABAN A</label></td>
                                <td><input type="text" name="JawabanA" placeholder="Masukkan Jawaban"></td>
                            </tr>
                            <tr>
                                <td><label for="JawabanB">JAWABAN B</label></td>
                                <td><input type="text" name="JawabanB" placeholder="Masukkan Jawaban"></td>
                            </tr>
                            <tr>
                                <td><label for="JawabanC">JAWABAN C</label></td>
                                <td><input type="text" name="JawabanC" placeholder="Masukkan Jawaban"></td>
                            </tr>
                            <tr>
                                <td><label for="JawabanD">JAWABAN D</label></td>
                                <td><input type="text" name="JawabanD" placeholder="Masukkan Jawaban"></td>
                            </tr>
                            <tr>
                                <td><label for="JawabanBenar">JAWABAN Benar</label></td>
                                <td><input type="text" name="JawabanBenar" placeholder="Masukkan Jawaban"></td>
                            </tr>
                        </table>

                        <?php if (isset($error)) { ?>
                            <p style="background-color: white; color:red"><?= $error ?></p>
                        <?php } ?>
                        <button type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include './layout/footer.php'; ?>
</body>
</html>
