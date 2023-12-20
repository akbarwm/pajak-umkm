<?php
while ($row = mysqli_fetch_assoc($query)) {
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
    (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result = "No message available";
    (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
    if (isset($row2['outgoing_msg_id'])) {
        ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
    } else {
        $you = "";
    }
    ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
    ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

    $output .= '<a href="chat.php?user_id=' . $row['unique_id'] . '" class="chat-item">
        <div class="row align-items-center">
            <div class="col-auto">
                <img src="php/images/' . $row['img'] . '" alt="">
            </div>
            <div class="col-md-5">
                <h5 id="nama">' . $row['fname'] . '</h5>
                <p id="nama">' . $row['lname'] . '</p>
            </div>
            <div class="col-auto ml-auto">
                <p class="text-right ' . (($row['status'] === 'Active now') ? 'text-success' : 'text-warning') . '">
                    ' . $row['status'] . '
                </p>
            </div>
        </div>
    </a>';
}
