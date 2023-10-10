<?php

session_start();
if (isset($_SESSION['unique_id'])) {
    include_once "../conf/config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = mysqli_real_escape_string($koneksi, $_POST['incoming_id']);
    $output = "";

    $sql = "SELECT * FROM tb_chat LEFT JOIN tb_users ON tb_users.unique_id = tb_chat.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
    $query = mysqli_query($koneksi, $sql);

    if (!$query) {
        die("Query error: " . mysqli_error($koneksi));
    }

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            if ($row['outgoing_msg_id'] === $outgoing_id) {
                $output .= '<div class="chat outgoing" >
                                <div class="details" >
                                    <p style=" background: #09c778">' . $row['msg'] . ' <small style="font-size: 10px; color:#fff; bottom: 0; right: 0; float: right; text-align: right; margin-left:10px;">' . date('H:i', strtotime($row['created_at'])) . '</small> </p>
                                    
                                </div>
                                </div>';
            } else {
                $output .= '<div class="chat incoming">
                                
                                <div class="details">
                                    <p>' . $row['msg'] . '<small style="font-size: 10px; color:#fff; bottom: 0; right: 0; float: right; text-align: right; margin-left:10px;">' . date('H:i', strtotime($row['created_at'])) . '</small></p>
                                </div>
                                </div>';
            }
        }
    } else {
        $output .= '<div class="text">Anda belum pernah berkonsultasi sebelumnya.</div>';
    }
    echo $output;
} else {
    header("location: ../login.php");
}
