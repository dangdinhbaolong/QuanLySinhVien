<?php
include "Connect.php";
$this_id = $_GET['this_id'];
//echo $this_id;
if (isset($_POST['btncapnhat'])) {
    $masv = $_POST['masv'];
    $tensv = $_POST['tensv'];
    $ns = $_POST['ns'];
    if (isset($_POST['optradio'])) {
        $gt = $_POST['optradio'];
        if ($gt == 'Nam') {
            //echo "Bạn đã chọn giới tính: Nam";
        } elseif ($gt == 'Nữ') {
            //echo "Bạn đã chọn giới tính: Nữ";
        } else {
            echo "Giới tính không hợp lệ.";
        }
    } else {
        echo "Bạn chưa chọn giới tính.";
    }
    $lop = $_POST['lop'];
    $que = $_POST['que'];
    $email = $_POST['email'];
    $sql_up = "UPDATE sinhvien SET tensv ='$tensv',namsinh ='$ns' ,gioitinh ='$gt',lop ='$lop',quequan = '$que',email ='$email' WHERE masv='$masv' ";
    if (mysqli_query($conn, $sql_up)) {
        //echo "Sua thanh cong";
    } else {
        //echo "Sua that bai";
    }
    header('location:home.php');
}
$sql = "SELECT * FROM sinhvien WHERE masv='$this_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Cập nhật sinh viên</title>
</head>

<body>

    <div class="container mt-3">
        <form action="Update.php" method="post">
            <h1 style="text-align: center;">Cập nhật sinh viên</h1>
            <div class="mb-3 mt-3">
                <label class="form-label">Mã sinh viên:</label>
                <input type="text" class="form-control" id="masv" name="masv" value="<?php echo $row['masv']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Tên sinh viên:</label>
                <input type="text" class="form-control" id="tensv" name="tensv" value="<?php echo $row['tensv']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Năm sinh:</label>
                <input type="date" class="form-control" id="ns" name="ns" value="<?php echo $row['namsinh']; ?>">
            </div>
            <div class="mb-3 row">
                <label class="form-label">Giới tính:</label>
                <div class="form-check col-1">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="Nam" <?php echo (strcasecmp($row['gioitinh'], 'Nam') == 0) ? 'checked' : ''; ?>>Nam
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check col-1">
                    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="Nữ" <?php echo (strcasecmp($row['gioitinh'], 'Nữ') == 0) ? 'checked' : ''; ?>>Nữ
                    <label class="form-check-label" for="radio2"></label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Lớp:</label>
                <input type="text" class="form-control" id="lop" name="lop" value="<?php echo $row['lop']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Quê quán:</label>
                <input type="text" class="form-control" id="que" name="que" value="<?php echo $row['quequan']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <button type="submit" class="btn btn-success" name="btncapnhat">Cập nhật sinh viên</button>
        </form>
    </div>
</body>

</html>