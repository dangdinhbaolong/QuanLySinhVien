<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <title>Đăng kí</title>
    <style>
        body {
            background-image: url('public/img/pexels-pixabay-50594.jpg');
            background-size:cover; 
            background-position: center;
            background-repeat: no-repeat; 
            background-attachment: fixed;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px; 
            border-radius: 8px; 
        }
    </style>
</head>

<body>
<?php 
require 'inc/headerform.php';
    ?>
    <div class="container" style="max-width: 400px; margin: 150px auto;">
        <h2 class="text-center">Register</h2>
        <form action="lib/register.php" method="post">
            <div class="mb-3 mt-3">
                <label for="username" class="form-label">Tên tài khoản</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
     <a href="login_form.php"><p>Đã đăng ký?</p></a>
            <button type="submit" name="btn_register" class="btn btn-primary">Đăng kí</button>
        </form>
    </div>
</body>

</html>
