<?php 
require "../data/db.php";
if(isset($_POST['btn_register'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $sql ="INSERT INTO users( username,password) VALUES('$username','$password')";
    if(mysqli_query($conn ,$sql)){
        echo "Them thanh cong";
    }else {
        echo"Them that bai". mysqli_error($conn);;
    }
    mysqli_close($conn);
    header('Location: ../login_form.php');
}
?>