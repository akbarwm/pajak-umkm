<?php
session_start();
include('../config/session.php');
include('../config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id_soal'])) {
        $id_soal = $_POST['id_soal'];
        $id_kuis = $_POST['id_kuis'];

        // Query untuk menghapus soal berdasarkan ID
        $sql = "DELETE FROM soal_pajak WHERE id = '$id_soal'";

        if (mysqli_query($db, $sql)) {
            $response = [
                'status' => 'success',
                'message' => 'Soal berhasil dihapus.'
            ];
            echo json_encode($response);
            exit;
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Gagal menghapus soal: ' . mysqli_error($db)
            ];
            echo json_encode($response);
            exit;
        }
    } else {
        $response = [
            'status' => 'error',
            'message' => 'ID soal tidak ditemukan.'
        ];
        echo json_encode($response);
        exit;
    }
} else {
    header("Location: list_soal.php");
    exit;
}

mysqli_close($db);
