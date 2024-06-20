<?php 
include "Connect.php";
$this_id = $_GET['this_id'];
echo $this_id;
$sql = "DELETE FROM sinhvien WHERE masv='$this_id'";
if(mysqli_query($conn,$sql)){
    echo "Xoa thanh cong";

}else {
    echo "Xoa that bai";
}
header('location:index.php');
?>