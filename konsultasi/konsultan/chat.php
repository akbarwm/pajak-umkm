 <?php

    $konsultan = $_SESSION['id_konsultan'];
    // Cek get
    if (!isset($_GET['user'])) {
        echo "Silahkan Pilih";
    } else {
        $get = $_GET['user'];
        $sql = mysqli_query($koneksi, "SELECT * FROM tb_users INNER JOIN tb_conversation ON tb_users.id_users = tb_conversation.conversation_id WHERE slugh = '$get'");

        $id_user = mysqli_fetch_assoc($sql);

        $query = mysqli_query($koneksi, "SELECT * FROM `tb_chat`");
        // $q = mysqli_fetch_assoc($query);


        if ($get === $id_user['slugh']) {

    ?>
         <!-- Chat Right -->
         <div class="chat-cont-right">
             <div class="chat-header">
                 <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                     <i class="material-icons">chevron_left</i>
                 </a>
                 <div class="media">
                     <div class="media-img-wrap">
                         <div class="avatar avatar-online">
                             <img src="assets/img/patients/<?= $id_user['foto_profil']; ?>" alt="User Image" class="avatar-img rounded-circle">
                         </div>
                     </div>
                     <div class="media-body">
                         <div class="user-name"><?= $id_user['nama']; ?></div>
                         <div class="user-status"><?= $id_user['status']; ?></div>
                     </div>
                 </div>

             </div>


             <div class="chat-body">
                 <div class="chat-scroll" id="chatBox">
                     <span class="d-flex justify-content-center"> Selamat datang di live chat konsultasi</span>
                     <ul class="list-unstyled">
                         <?php foreach ($query as $q) :
                                if ($q['from_id'] === $_SESSION['id_konsultan']) {
                            ?>
                                 <li class="media sent">
                                     <div class="media-body">

                                         <div class="msg-box">
                                             <div>
                                                 <p><?= $q['message']; ?></p>
                                                 <ul class="chat-msg-info">
                                                     <li>
                                                         <div class="chat-time">
                                                             <span><?= $q['created_at']; ?></span>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                             <?php

                                } else if ($q['to_id'] == $get) { ?>
                                 <li class="media received">
                                     <div class="avatar">
                                         <img src="assets/img/patients/patient.jpg" alt="User Image" class="avatar-img rounded-circle">
                                     </div>
                                     <div class="media-body">
                                         <div class="msg-box">
                                             <div>
                                                 <p><?= $q['message']; ?></p>

                                                 <ul class="chat-msg-info">
                                                     <li>
                                                         <div class="chat-time">
                                                             <span><?= $q['created_at']; ?></span>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                         <div class="msg-box">
                                             <div>
                                                 <p>Are you there? That time!</p>
                                                 <ul class="chat-msg-info">
                                                     <li>
                                                         <div class="chat-time">
                                                             <span>8:40 AM</span>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>

                                     </div>
                                 </li>
                             <?php

                                }
                                ?>

                         <?php endforeach; ?>


                     </ul>
                 </div>
             </div>
             <!-- /CHAT RIGHT -->

             <div class="chat-footer">
                 <div class="input-group">
                     <div class="input-group-prepend">
                         <div class="btn-file btn">
                             <i class="fa fa-paperclip"></i>
                             <input type="file">
                         </div>
                     </div>
                     <input type="text" class="input-msg-send form-control" placeholder="Type something" id="message">
                     <div class="input-group-append">
                         <button type="button" class="btn msg-send-btn" id="sendBtn"><i class="fab fa-telegram-plane"></i></button>
                     </div>
                 </div>
             </div>
         </div>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
         <script>
             var scrollDown = function() {
                 let chatBox = document.getElementById('chatBox');
                 chatBox.scrollTop = chatBox.scrollHeight;
             }

             scrollDown();


             $(document).ready(function() {

                 $("#sendBtn").on('click', function() {
                     message = $("#message").val();

                     if (message == "") return;

                     $.post("assets/ajax/insert.php", {
                             message: message,
                             to_id: <?= $id_user['id_users']; ?>
                         },
                         function(data, status) {
                             $("#message").val("");
                             $("#chatBox").append(data);
                             scrollDown();
                         });
                 });
             });
         </script>
         <!-- /Chat Right -->
 <?php
        } else {
            echo "";
        }
    }
    include('layout/footer.php');
    ?>