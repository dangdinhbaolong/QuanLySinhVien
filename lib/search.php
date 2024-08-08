<?php
require "../data/db.php";

if (isset($_GET['btnsearch'])) {
    $textsearch = trim($_GET['search']);

    if ($textsearch == '') {
        header('Location: /QuanLySinhVien/?page=home');
        exit();
    } else {
        $textsearch = mysqli_real_escape_string($conn, $textsearch);
        $sql = "SELECT * FROM sinhvien WHERE tensv LIKE '%$textsearch%' OR quequan LIKE '%$textsearch%' OR gpa LIKE '%$textsearch%'";
        $result = mysqli_query($conn, $sql);

        session_start();
        $_SESSION['search_results'] = [];

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['search_results'][] = $row;
            }
        } else {
            $_SESSION['search_results'] = ['error' => mysqli_error($conn)];
        }

        mysqli_close($conn);

        header('Location: /QuanLySinhVien/?page=home');
        exit();
    }
} else {
    header('Location: /QuanLySinhVien/?page=home');
    exit();
}
?>
