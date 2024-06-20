<?php 
    $server ='localhost';
    $user = 'root';
    $pass = '';
    $db = 'qlsv';
    $conn = new mysqli($server,$user,$pass,$db);
    if($conn){
        mysqli_query($conn , "SET NAMES 'UTF8'");
        //echo "Kết nối thành công";
    }  else {
        echo "Kết nối thất bại" .mysqli_connect_error();
    }
      ?>