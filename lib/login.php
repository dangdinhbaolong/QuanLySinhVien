<?php   
require '../data/db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: /QuanLySinhVien/?page=home"); 
        exit();
    } else {
        echo "Invalid username or password";
    }

    $stmt->close();
    $conn->close();
}
?>
