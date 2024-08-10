<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <title>Login</title>
</head>

<body style="background-image:url('https://uneti.edu.vn/wp-content/uploads/2021/04/L%E1%BB%8Bch-7-t%E1%BB%9D-6-2048x1365.jpeg');">
    <div class=" container" style="max-width: 400px;margin: 150px auto;">
    <h2 class="text-center">Register</h2>
    <form action="lib/register.php" method="post">
        <div class="mb-3 mt-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <p>You have an account, please click <a href="login_form.php">Login</a></p>
        <button type="submit" name="btn_register" class="btn btn-primary ">Register</button>
    </form>
    </div>
</body>

</html>