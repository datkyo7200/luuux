<?php
    ob_start();
    session_start();
    function showArray($data)
    {
        if (is_array($data)) {
            echo '<pre>';
            print_r($data);
            echo '</pre>';
        }
    }
    showArray($_SESSION);
    if (isset($_COOKIE['is_login'])) {
        echo "<p style='color:blue'>Họ và tên [cookie]: {$_SESSION['user_login']} </p><br>";
    }
    if (!isset($_SESSION['is_login'])) {
        header("Location: login.php");
    } else {
        echo "<p style='color:blue'>Họ và tên: {$_SESSION['user_login']} </p>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Trang chủ</h1>
    <a href="logout.php">Đăng xuất </a>
</body>

</html>