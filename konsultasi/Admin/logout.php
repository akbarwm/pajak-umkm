<?php
   session_start();
   

   include 'config/connection.php';
   if (isset($_GET['back'])) {
       $error = $_GET['back'];
   
       if ($error == "delete") {
           $query = mysqli_query($db, "DELETE FROM `tb_entry`");
       }
   }
   
   if(session_destroy()) {
      header("location: login.php");
   }
