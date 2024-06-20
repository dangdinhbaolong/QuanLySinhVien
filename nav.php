<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
 Thêm sinh viên
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h1 class="modal-title">Thêm sinh viên</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container">
    <form action="Insert.php" method="post">
       
        <div class="mb-3 mt-3">
            <label class="form-label">Mã sinh viên :</label>
            <input type="text" class="form-control" id="masv" name="masv" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tên sinh viên:</label>
            <input type="text" class="form-control" id="tensv" name="tensv" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Năm sinh:</label>
            <input type="date" class="form-control" id="ns" name="ns" required>
        </div>
        <div class="mb-3 row">
            <label class="form-label">Giới tính:</label>
            <div class="form-check col-2">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="Nam" checked >Nam
                <label class="form-check-label" for="radio1"></label>
            </div>
            <div class="form-check col-2">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="Nữ">Nữ
                <label class="form-check-label" for="radio2"></label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Lớp:</label>
            <input type="text" class="form-control" id="lop" name="lop" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Quê quán:</label>
            <input type="text" class="form-control" id="que" name="que" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-success" name="btnthem">Thêm sinh viên </button>
    </form>
    </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
        </ul>
    </nav>
</body>
</html>