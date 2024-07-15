<?php
session_start();
include('../config/session.php');
include('../config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Query untuk menghapus kuis berdasarkan ID
        $sql = "DELETE FROM quiz_pajak WHERE id = '$id'";

        if (mysqli_query($db, $sql)) {
            $response = [
                'status' => 'success',
                'message' => 'Kuis berhasil dihapus.'
            ];
            echo json_encode($response);
            exit;
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Gagal menghapus kuis: ' . mysqli_error($db)
            ];
            echo json_encode($response);
            exit;
        }
    } else {
        $response = [
            'status' => 'error',
            'message' => 'ID kuis tidak ditemukan.'
        ];
        echo json_encode($response);
        exit;
    }
} else {
    header("Location: dashboard_kuis.php");
    exit;
}

mysqli_close($db);
