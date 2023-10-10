<!-- menampilkan Chat Right di user list -->
<?php
while ($row = mysqli_fetch_assoc($query)) {
    $sql2 = "SELECT * FROM tb_chat WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($koneksi, $sql2);
    $row2 = mysqli_fetch_assoc($query2);

    (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result = "No message available";
    (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;

    if (isset($row2['outgoing_msg_id'])) {
        ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
    } else {
        $you = "";
    }
    ($row['status'] == "Offline") ? $offline = "offline" : $offline = "";
    ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";


    if ($row['unique_id_konsultan'] == $outgoing_id) {
        // melakukan sesuatu jika unique_id_konsultan sama dengan outgoing_id (SISI KONSULTAN)
        $output .=
            ' 
    
                                                <a href="./chat-konsultan.php?user_id=' . $row['unique_id_user'] . '" class="media read-chat">
												<div class="media-img-wrap">
													<div class="avatar avatar-away">
                                                    <img src="../img/users_profil/' . $row['foto_profil'] . '" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
                                                    <div class="user-name">' . $row['nama_user'] . '</div>
                                                    <div class="user-last-chat">' . $you . $msg . '</div>
													</div>
													<div>
														<div class="last-chat-time block">2 min</div>
														<div class="badge badge-success badge-pill">15</div>
													</div>
												</div>
											</a>';
    } else {
        // melakukan sesuatu jika unique_id_user sama dengan outgoing_id (SISI KLIEN)
        $output .=
            ' 
    
                                                <a href="../user/chat.php?user_id=' . $row['unique_id'] . '" class="media read-chat">
												<div class="media-img-wrap">
													<div class="avatar avatar-away">
                                                    <img src="../img/konsultan_profil/' . $row['profil_pic'] . '" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
                                                    <div class="user-name">' . $row['nama'] . '</div>
                                                    <div class="user-last-chat">' . $you . $msg . '</div>
													</div>
													<div>
														
													</div>
												</div>
											</a>';
    }
}
