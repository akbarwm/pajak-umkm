<?php
// $koneksi = mysqli_connect('localhost','root',"",'sudutpajak', 2083);
if ($_SERVER['SERVER_NAME'] == 'sudutpajak.taxcenter-polibatam.id') {
    $koneksi = mysqli_connect('localhost', 'zaxnpiwc_sudutpajak', 'Inipassword12379?!', 'zaxnpiwc_sudutpajak');
} else if ($_SERVER['SERVER_NAME'] == 'sudutpajak.elusivetako.my.id') {
    $koneksi = mysqli_connect('localhost', 'elusivet_sudut_pajak', "Inipassword12379?!", 'elusivet_sudut_pajak');
} else {
    $koneksi = mysqli_connect('localhost', 'root', '', 'pajak2');
}

/*
if(!$koneksi){
	die("koneksi Gagal:". mysqli_connect_error());
}
else{
	echo "Koneksi Berhasil";
}
*/
