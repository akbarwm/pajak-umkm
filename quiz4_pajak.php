<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Quiz</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <style>
        /* Custom CSS untuk mengatur tinggi kartu */
        .single-about {
            height: 300px;
        }

        .single-about>p {
            color: black;
        }

        .small-img {
            width: 50px;
            /* Ubah ukuran sesuai kebutuhan Anda */
            height: auto;
        }

        .text {
            margin-left: 370px;
            /* Jarak antara gambar dan tulisan */
            font-size: 14px;
            /* Ukuran font tulisan */
            margin-top: -40px;
            font-weight: bold;
            /* Menebalkan teks */
        }

        .box {
            width: 18%;
            /* Sesuaikan ukuran kotak */
            max-width: 1030px;
            height: 150px;
            /* Sesuaikan ukuran kotak */
            background-color: white;
            /* Warna latar belakang kotak */
            border: 20px solid transparent;
            /* Membuat border transparan */
            background-clip: padding-box;
            /* Membatasi background agar tidak melewati border */
            border-radius: 30px;
            /* Menengahkan kotak secara horizontal */
            margin-top: 80px;
            /* Jarak antara teks dan kotak */
            position: relative;
            margin-left: 10px;
        }

        .box::before {
            content: "";
            position: absolute;
            top: -5px;
            /* Sesuaikan dengan ukuran border */
            left: -5px;
            /* Sesuaikan dengan ukuran border */
            right: -5px;
            /* Sesuaikan dengan ukuran border */
            bottom: -5px;
            /* Sesuaikan dengan ukuran border */
            background: linear-gradient(to top, #289C5E, #4FA2ED);
            z-index: -1;
            border-radius: 20px;
        }

        .box1 {
            width: 700px;
            /* Sesuaikan ukuran kotak */
            max-width: 1350px;
            height: 400px;
            /* Sesuaikan ukuran kotak */
            background-color: white;
            /* Warna latar belakang kotak */
            border: 10px solid transparent;
            /* Membuat border transparan */
            background-clip: padding-box;
            /* Membatasi background agar tidak melewati border */
            border-radius: 10px;
            /* Membuat sudut kotak menjadi bulat */
            margin: auto;
            /* Menengahkan kotak secara horizontal */
            margin-top: -130px;
            margin-left: 250px;
            /* Jarak antara teks dan kotak */
            position: relative;
        }


        .box1::before {
            content: "";
            position: absolute;
            top: -5px;
            /* Sesuaikan dengan ukuran border */
            left: -5px;
            /* Sesuaikan dengan ukuran border */
            right: -5px;
            /* Sesuaikan dengan ukuran border */
            bottom: -5px;
            /* Sesuaikan dengan ukuran border */
            background: linear-gradient(to top, #289C5E, #4FA2ED);
            z-index: -1;
            border-radius: 10px;
        }

        .box3 {
            width: 240px;
            /* Sesuaikan ukuran kotak */
            max-width: 1350px;
            height: 230px;
            /* Sesuaikan ukuran kotak */
            background-color: white;
            /* Warna latar belakang kotak */
            border: 10px solid transparent;
            /* Membuat border transparan */
            background-clip: padding-box;
            /* Membatasi background agar tidak melewati border */
            border-radius: 10px;
            /* Membuat sudut kotak menjadi bulat */
            margin: auto;
            /* Menengahkan kotak secara horizontal */
            margin-top: -270px;
            margin-left: 750px;
            /* Jarak antara teks dan kotak */
            position: relative;
        }

        .box3::before {
            content: "";
            position: absolute;
            top: -5px;
            /* Sesuaikan dengan ukuran border */
            left: -5px;
            /* Sesuaikan dengan ukuran border */
            right: -5px;
            /* Sesuaikan dengan ukuran border */
            bottom: -5px;
            /* Sesuaikan dengan ukuran border */
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
            /* Anda dapat menggunakan nilai antara 400 (normal) hingga 900 (tebal) */
        }




        .footer {
            background-color: #f8f9fa;
            /* Warna latar belakang */
            padding: 20px;
            /* Padding */
            display: flex;
            /* Gunakan flexbox */
            align-items: center;
            /* Pusatkan secara vertikal */
            justify-content: center;
            /* Pusatkan secara horizontal */
            margin-top: 100px;
            margin-left: 500px;
        }

        /* Gaya teks */
        .footer p {
            margin: -100px;
            /* Hapus margin bawaan */
            color: black;
            /* Warna teks */
        }

        .text-left {
            tex
        }

        .red-text {
            color: red;
            /* Mengatur warna teks menjadi merah */
            margin-bottom: 590px;
        }

        .no-margin {
            margin-bottom: 0;
            /* Menghilangkan jarak spasi ke bawah */
        }

        .lowered-text {
            margin-top: 400px;
            /* Menurunkan posisi teks ke bawah sebesar 10 piksel */
        }

        .time-box {
            border: 1px solid #ccc;
            /* Garis tepi */
            border-radius: 10px;
            border-color: red;
            padding: 10px;
            /* Ruang dalam */
            width: 170px;
            /* Lebar box */
            height: 40px;
            /* Tinggi box */
            margin-left: 490px;
            margin-top: 20px;
            display: inline-block;
            /* Agar box berbentuk kotak */
            font-weight: 800;
        }

        /* Gaya radio button */
        .input[type="radio"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #3498db;
            /* Border biru */
            border-radius: 50%;
            outline: none;
            margin-right: 5px;
        }

        .number-button {
            background-color: #4CAF50;
            /* Warna awal */
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
            /* Gradasi warna */
            color: white;
            /* Warna teks */
            padding: 8px 12px;
            /* Padding tombol */
            border: none;
            /* Menghapus border */
            border-radius: 10%;
            /* Membuat sudut tombol melengkung */
            cursor: pointer;
            /* Mengubah kursor saat diarahkan ke tombol */
            margin: 5px;
            /* Margin antara tombol */
        }

        .number-list {
            list-style-type: none;
            /* Menghilangkan bullet list */
            padding-left: 0;
            /* Menghilangkan padding kiri */
            display: flex;
            /* Mengatur elemen list secara horizontal */
            flex-wrap: wrap;
            /* Mengizinkan wrapping ke baris baru */
        }

        .number-list li {
            flex: 0 0 calc(50% - 10px);
            /* Membagi ruang menjadi dua kolom */
            margin-bottom: 10px;
            /* Margin antara baris */
            justify-content: flex-start;
        }

        .number-button1 {
            margin-left: -50px;
            /* Gradasi warna */
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
            padding: 5px 12px;
            border-radius: 10%;
            /* Membuat sudut tombol melengkung */
        }

        .number-button2 {
            margin-left: 10px;
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
            padding: 5px 10px;
            border-radius: 10%;
            /* Membuat sudut tombol melengkung */
        }

        .number-button3 {
            margin-left: 10px;
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
            /* Gradasi warna */
            padding: 5px 10px;
            border-radius: 10%;
            /* Membuat sudut tombol melengkung */
        }

        .number-button4 {
            margin-left: 10px;
           
            /* Gradasi warna */
            padding: 5px 10px;
            border-radius: 10%;
            /* Membuat sudut tombol melengkung */
        }

        .number-button5 {
            margin-right: auto;
            margin-left: -50px;
            display: block;
            
            /* Gradasi warna */
            margin-top: 20px;
            padding: 5px 10px;
            /* Padding tombol */
            border-radius: 10%;
            /* Membuat sudut tombol melengkung */
        }

        .finish-button {
            background-color: #4CAF50;
            /* Warna awal */
            background-image: linear-gradient(to right, #4CAF50, #2196F3);
            /* Gradasi warna */
            color: white;
            /* Warna teks */
            padding: 5px 14px;
            /* Padding tombol */
            border: none;
            /* Menghapus border */
            border-radius: 10px;
            /* Membuat sudut tombol melengkung */
            cursor: pointer;
            /* Mengubah kursor saat diarahkan ke tombol */
            margin-top: 30px;
            /* Margin di atas tombol */
            margin-left: 40px;
            width: 100px;
        }

        .next-button {
        background-color: #4CAF50;
        background-image: linear-gradient(to right, #4CAF50, #2196F3);
        color: white;
        padding: 10px 20px; /* Perbesar padding sesuai kebutuhan */
        border: none;
        cursor: pointer;
        margin-top: 250px; /* Sesuaikan margin atas sesuai kebutuhan */
        margin-left: 40px;
        width: 150px; /* Sesuaikan lebar tombol */
        border-radius: 5px; /* Tambahkan sudut tombol melengkung */
        text-align: center; /* Pusatkan teks secara horizontal */
        display: inline-block; /* Agar tombol bisa menyesuaikan lebar teks */
        }

        .radio-container {
            display: flex;
            flex-direction: row;
        }

        .radio-container input[type="radio"],
        .radio-container label {
            margin-right: 10px;
        }

        /* CSS untuk kotak */
        .custom-box {
            position: relative;
            /* Mengatur posisi relatif */
            width: 500px;
            /* Lebar kotak */
            min-height: 60px;
            /* Tinggi minimum kotak */
            max-height: 70px;
            /* Tinggi maksimum kotak */
            border: 5px solid;
            /* Tambahkan border dengan ketebalan 5px */
            border-image: linear-gradient(to right, #4CAF50, #2196F3) 1;
            /* Atur gambar border sebagai gradasi hijau */
            border-radius: 10px;
            /* Sudut kotak dibuat melengkung */
            padding: 10px;
            /* Padding di dalam kotak */
            margin: 0 auto;
            /* Pusatkan kotak secara horizontal */
            margin-top: 70px;
            /* Jarak dari atas */
            margin-right: 100px;
            font-size: 16px;
            /* Ukuran font */
            resize: none;
            /* Menghilangkan kemampuan untuk mengubah ukuran input */
            outline: none;
            /* Hapus outline */
            color: white;
            /* Warna teks putih */
            background-color: white;
            /* Warna latar belakang putih */
            box-sizing: border-box;
            /* Ukuran kotak termasuk border dan padding */
        }

        /* CSS untuk latar belakang gradasi hijau pada border */
        .custom-box::before {
            content: '';
            /* Menambahkan konten kosong */
            position: absolute;
            /* Mengatur posisi absolut */
            top: -5px;
            /* Mengatur jarak dari atas */
            left: -5px;
            /* Mengatur jarak dari kiri */
            width: calc(100% + 10px);
            /* Lebar pseudo-element */
            height: calc(100% + 10px);
            /* Tinggi pseudo-element */
            border-radius: 15px;
            /* Sudut pseudo-element dibuat melengkung */
            z-index: -1;
            /* Mengatur pseudo-element di belakang konten utama */
            background: linear-gradient(to right, #4CAF50, #2196F3);
            /* Gradasi hijau */
        }

        /* CSS untuk kotak input */
        .inner-box input {
            width: calc(100% - 10px);
            /* Lebar input */
            border: none;
            /* Hapus border input */
            background: transparent;
            margin-bottom: 20px;
            /* Hapus latar belakang input */
        }
       

        .inner-box {
    width: 80%;
    position: relative;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
    position: relative;
    z-index: 1;
    background: #fff;
}

.inner-box::before {
    content: '';
    position: absolute;
    top: -3px;
    left: -3px;
    right: -3px;
    bottom: 16px;
    border-radius: 10px;
    background: linear-gradient(to right, #4CAF50, #2196F3);
    z-index: 0;
    padding: 10px; /* Adjust padding to match the input padding */
    box-sizing: border-box; /* Ensure the pseudo-element respects the padding */
}
}
input[type="text"]::-webkit-input-placeholder {
    /* WebKit browsers (Chrome, Safari) */
    color: #C4B4B4 !important; /* Warna abu-abu pudar */
}

input[type="text"]:-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
    color: #C4B4B4!important; /* Warna abu-abu pudar */
}

input[type="text"]::-moz-placeholder {
    /* Mozilla Firefox 19+ */
    color: #C4B4B4 !important; /* Warna abu-abu pudar */
}

input[type="text"]:-ms-input-placeholder {
    /* Internet Explorer 10-11 */
    color: #C4B4B4 !important; /* Warna abu-abu pudar */
}

input[type="text"]::placeholder {
    /* Default placeholder styling */
    color: #C4B4B4 !important; /* Warna abu-abu pudar */
}

.input-container {
    display: flex;
    align-items: center;
}
.outer-box {
    width: 650px;
    border-radius: 10px;
    padding: 20px;
    margin-left: 70px; /* Memindahkan kotak ke kanan */
    margin-top: -60px;
    margin-right: 
}
.label{
    margin-top:60px;
}
.awal-button {
           
           background-color: #4CAF50;
           background-image: linear-gradient(to right, #4CAF50, #2196F3);
           /* Gradasi warna */
           color: white;
           /* Warna teks */
           padding: 10px 20px;
           border: none;
           border: none;
           display: inline-block;
           cursor: pointer;
           text-align: center;
           margin-top: 260px;
           border-radius: 5px;
           margin-left: -1200px;
           width: 100px;
       }
    </style>
</head>

<body>
    <?php
    session_start();
    include './connection.php';
    include 'konsultasi/navbar4.php';
    ?>
    <!-- Header Section Start-->
    <!-- Header Menu End -->


    <br>
    <div class="mt-4 mb-5">
        <img src="img/image.png" alt="" class="small-img" style="margin-top: 30px; margin-left: 300px">
        <div class="text">
            <h4>KUIS PPh 21: PENGHITUNGAN PPh 21</h4>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="box ">
            <div class="text-left mt-4 ml-4 ">
                <h4 class="no-margin">Pertanyaan 4</h4>
                <p><span class="red-text">Tidak ada jawaban</span></p>
            </div>
            <div class="container mt-5 mb-5">
                <div class="box1 ">
                    <div class="time-box">
                        <p>Sisa Waktu 00:00</p>
                    </div>
                    <div class="text-container mt-4 ml-4">
                        <p><span class="text-left lowered-text">Pada tahun 2021, Pak Budi adalah karyawan yang belum
                                menikah. Maka PTKP untuk Pak Budi adalah..</span></p>
                        
                        
        <div class="label">
            Jawaban     :
        </div>
        <div class="outer-box">
        <div class="inner-box">
            <input type="text" placeholder="Ketik jawaban di sini...">
        </div>
    </div>
                    </div>
                    <div class="box3">
                        <div class="button mt-4 ml-4">
                            <ol>
                                <button class="number-button1">1</button>
                                <button class="number-button2">2</button>
                                <button class="number-button3">3</button>
                                <button class="number-button4">4</button>
                                <button class="number-button5">5</button>
                                <!-- Tambahkan lebih banyak tombol sesuai kebutuhan -->
                            </ol>
                            <button class="finish-button">Selesai</button> <!-- Tombol "Selesai" -->
                        </div>
                        <a href="quiz5_pajak.php"> <button class="next-button">Selanjutnya</button></a> <!-- Tombol "Selanjutnya" -->
                       <a href="quiz3_pajak.php"> <button class="awal-button">Kembali</button></a>
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