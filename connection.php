<?php
//   define('DB_SERVER', 'localhost:3306');
//   define('DB_USERNAME', 'root');
//   define('DB_PASSWORD', '');
//   define('DB_DATABASE', 'sudut_pajak');
//   $db = mysqli_connect('localhost','taxcente_sudut_pajak','SudutPajak2023','taxcente_sudut_pajak', 2083);
   
    //   $db = mysqli_connect('localhost','root',"",'sudutpajak');


    if ( $_SERVER['SERVER_NAME'] == 'sudutpajak.taxcenter-polibatam.id' ) {
      $db = mysqli_connect('localhost', 'zaxnpiwc_sudutpajak', 'Inipassword12379?!', 'zaxnpiwc_sudutpajak');

    } else if ( $_SERVER['SERVER_NAME'] == 'sudutpajak.elusivetako.my.id' ) {
      $db = mysqli_connect('localhost','elusivet_sudut_pajak',"Inipassword12379?!",'elusivet_sudut_pajak');

    } else {
      $db = mysqli_connect('localhost', 'root', '', 'pajak2');
    }
