<?php
require '../data/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $sql = "INSERT INTO contact_messages(name, email, message) VALUES ('$name','$email','$message')" ;
    if (mysqli_query($conn, $sql)) {
        echo "Thêm thành công";
    } else {
        echo "Thêm thất bại: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header('Location: /QuanLySinhVien/?page=contact&status=succes');
} else {
    echo "<h1>Invalid request method</h1>";
}

?>
