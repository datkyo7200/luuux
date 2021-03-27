<?php

function showArray($data)
{
    if (is_array($data)) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
$list_user = array(
    array('username' => 'datkyo7200', 'password' => '1234'),
    array('username' => 'datkyo7201', 'password' => '1235')
);

//Kiểm tra đã submit form hay chưa??
if (isset($_POST['btn_login'])) {
    $error = array();// Mảng lưu lỗi
    if (empty($_POST['username'])) {
        //Hạ cở
        $error['username'] = "Không được để trống trường username";
    } else {
        if (!(strlen($_POST['username'])>=6 && strlen($_POST['username'])<=32)) {
            $error['username'] = "Username yêu cầu từ 6->32 ký tự";
        } else {
            $pattern = '/^[A-Za-z][A-Za-z0-9]{5,31}$/';
            if (!preg_match($pattern, $_POST['username'], $match)) {
                $error['username'] = "Username cho phép sử dụng ký tự, chữ số và có độ dài từ 6->32 ký tự";
            } else {
                $username = $_POST['username'];
            }
        }
    }
    if (empty($_POST['password'])) {
        //Hạ cở
        $error['password'] = "Không được để trống trường password";
    } else {
        $password = $_POST['password'];
    }
    if (empty($error)) {
        echo $username."-".$password;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Form Login</title>
</head>

<body>
    <h1>Đăng Nhập</h1>
    <form action="" method="post">
        <br>
        <label for="username">User Name</label><br>
        <input type="text" name="username" id="username" value="" autocomplete="off">
        <p style=" color:red">
            <?php if (!empty($error['username'])) {
    echo $error['username'];
} ?>
        </p>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" value="">
        <p style="color:red">
            <?php if (!empty($error['password'])) {
    echo $error['password'];
} ?>
        </p>
        <input type="submit" name="btn_login" value="Login">
    </form>

</body>

</html>