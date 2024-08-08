<div id="content" class="container">
<h1 style="text-align: center;">Thêm sinh viên</h1>
<form action="lib/insert.php" method="post">
       
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
       <div class="mb-3">
           <label class="form-label">GPA:</label>
           <input type="number" step="0.01" class="form-control" id="gpa" name="gpa" required>
       </div>
       <button type="submit" class="btn btn-success" name="btnthem">Thêm sinh viên </button>
   </form>
</div>