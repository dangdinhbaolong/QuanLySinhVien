<?php
    include "Connect.php";
    if(isset($_POST['btnthem'])){
        $masv = $_POST['masv'];
        $tensv = $_POST['tensv'];
        $ns = $_POST['ns'];
        if (isset($_POST['optradio'])) {
            $gt = $_POST['optradio'];
            if ($gt == 'Nam') {
                echo "Bạn đã chọn giới tính: Nam";
            } elseif ($gt == 'Nữ') {
                echo "Bạn đã chọn giới tính: Nữ";
            } else {
                echo "Giới tính không hợp lệ.";
            }
        } else {
            echo "Bạn chưa chọn giới tính.";
        }
        $lop = $_POST['lop'];
        $que= $_POST['que'];
        $email = $_POST['email'];
        $sql = "INSERT INTO sinhvien(masv,tensv,namsinh,gioitinh,lop,quequan,email) VALUES ('$masv','$tensv','$ns','$gt','$lop','$que','$email')";
        if(mysqli_query($conn,$sql)){
            echo"Them thanh cong";
        }else {
            echo "Them that bai";
        }
        header('location:home.php');
    }
    ?>