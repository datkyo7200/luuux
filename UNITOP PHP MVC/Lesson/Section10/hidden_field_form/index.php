<?php

function showArray($data)
{
    if (is_array($data)) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
if (isset($_POST['btn_login'])) {
    $info_user = array(
        'username' => 'admin',
        'password' => 'admin123'
    );
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "Tài khoản không được để trống";
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Mật khẩu không được để trống";
    } else {

        $password = $_POST['password'];
    }
    if (empty($error)) {
        if ($username === $info_user['username'] && $password === $info_user['password']) {
            $redirect_to = $_POST['redirect_to'];
            echo $redirect_to;
            header("location:{$redirect_to}");
        } else {
            $error['login'] = "Sai tài khoản or mật khẩu !!!";
        }
    }
    if (!empty($error)) {
        showArray($error);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận Data From Hidden Field</title>
</head>

<body>
    <h1>Đăng Nhập</h1>
    <form action="" method="post"
        style="padding-top:30px;height:100px;width:300px;text-align:center;background-color: navajowhite;">
        User Name <input type="text" name="username" value="" style="margin-left: 22px;"><br>
        <br>
        Password <input type="password" name="password" value=""><br>
        <br>
        <input type="hidden" name="redirect_to" value="cart.php">
        <input type="submit" name="btn_login" value="Login">
    </form>

</body>

</html>