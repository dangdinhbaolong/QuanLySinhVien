<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Danh sách sinh viên</title>
</head>
<body>
  <div class="container-fluid mt-3">
    <h1 style="text-align: center;">Danh sách sinh viên</h1>

    <form action="lib/search.php" method="get">
      <div class="mb-3 mt-3">
        Tìm kiếm: <input type="text" id="search" name="search" style="width: 80%;">
        <button class="btn btn-primary" name="btnsearch">Tìm kiếm</button>
      </div>
    </form>

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
        session_start();
        
        if (isset($_SESSION['search_results'])) {
            $results = $_SESSION['search_results'];
            unset($_SESSION['search_results']);
            
            if (isset($results['error'])) {
                echo "<tr><td colspan='8'>Error: " . htmlspecialchars($results['error']) . "</td></tr>";
            } elseif (count($results) > 0) {
                foreach ($results as $row) { ?>
                    <tr>
                      <td><?php echo htmlspecialchars($row['masv']); ?></td>
                      <td><?php echo htmlspecialchars($row['tensv']); ?></td>
                      <td><?php echo htmlspecialchars($row['namsinh']); ?></td>
                      <td><?php echo htmlspecialchars($row['gioitinh']); ?></td>
                      <td><?php echo htmlspecialchars($row['lop']); ?></td>
                      <td><?php echo htmlspecialchars($row['quequan']); ?></td>
                      <td><?php echo htmlspecialchars($row['email']); ?></td>
                      <td>
                        <a href="lib/update.php?this_id=<?php echo htmlspecialchars($row['masv']); ?>" class="btn btn-primary">Sửa</a>
                        <a href="lib/delete.php?this_id=<?php echo htmlspecialchars($row['masv']); ?>" class="btn btn-danger">Xóa</a>
                      </td>
                    </tr>
                <?php }
            } else {
                echo "<tr><td colspan='8'>Không tìm thấy sinh viên nào.</td></tr>";
            }
        } else {
            require "data/db.php";
            $sql = "SELECT * FROM sinhvien";
            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                      <td><?php echo htmlspecialchars($row['masv']); ?></td>
                      <td><?php echo htmlspecialchars($row['tensv']); ?></td>
                      <td><?php echo htmlspecialchars($row['namsinh']); ?></td>
                      <td><?php echo htmlspecialchars($row['gioitinh']); ?></td>
                      <td><?php echo htmlspecialchars($row['lop']); ?></td>
                      <td><?php echo htmlspecialchars($row['quequan']); ?></td>
                      <td><?php echo htmlspecialchars($row['email']); ?></td>
                      <td>
                        <a href="lib/update.php?this_id=<?php echo htmlspecialchars($row['masv']); ?>" class="btn btn-primary">Sửa</a>
                        <a href="lib/delete.php?this_id=<?php echo htmlspecialchars($row['masv']); ?>" class="btn btn-danger">Xóa</a>
                      </td>
                    </tr>
                <?php }
            } else {
                echo "<tr><td colspan='8'>Error: " . htmlspecialchars(mysqli_error($conn)) . "</td></tr>";
            }
        }
        ?>
      </tbody>
    </table>
  </div>
  
</body>
</html>
