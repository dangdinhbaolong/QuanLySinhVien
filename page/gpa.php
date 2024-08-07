<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="public/css/reset.css">
  <link rel="stylesheet" href="../public/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container-fluid mt-3">
    <h2 style="text-align: center;">Danh sách sinh viên </h2>
    <table class="table table-hover">
      <thead class="table-dark">
        <tr>
          <th>Mã sinh viên</th>
          <th>Tên sinh viên</th>
          <th>Giới tính</th>
          <th>Lớp</th>
          <th>GPA</th>
        </tr>
      </thead>
      <tbody>
        <?php
       require 'data/db.php';
        $sql = "SELECT *FROM sinhvien";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $row['masv']; ?></td>
            <td><?php echo $row['tensv']; ?></td>
            <td><?php echo $row['gioitinh']; ?></td>
            <td><?php echo $row['lop']; ?></td>
            <td><?php echo $row['gpa']; ?></td>
          </tr>
        <?php  } ?>

      </tbody>
    </table>
  </div>
</body>

</html>