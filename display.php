<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="container-fluid mt-3">
    <h1 style="text-align: center;">Danh sách sinh viên </h1>
    <table class="table table-hover">
      <thead class="table-dark">
        <tr>
          <th>Mã sinh viên</th>
          <th>Tên sinh viên</th>
          <th>Năm sinh</th>
          <th>Giới tính</th>
          <th>Lớp</th>
          <th>Quê quán</th>
          <th>Email</th>
          <th>Thuộc tính</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "Connect.php";
        $sql = "SELECT *FROM sinhvien";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $row['masv']; ?></td>
            <td><?php echo $row['tensv']; ?></td>
            <td><?php echo $row['namsinh']; ?></td>
            <td><?php echo $row['gioitinh']; ?></td>
            <td><?php echo $row['lop']; ?></td>
            <td><?php echo $row['quequan']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
              <a href="Update.php?this_id=<?php echo $row['masv']; ?>" class="btn btn-primary">Sửa</a>
              <a href="Delete.php?this_id=<?php echo $row['masv']; ?>" class="btn btn-danger">Xóa</a>
            </td>
          </tr>
        <?php  } ?>

      </tbody>
    </table>
  </div>
</body>

</html>