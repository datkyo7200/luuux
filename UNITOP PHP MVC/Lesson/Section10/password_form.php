<?php
//b1: Kiểm tra submit form
//b2: Lấy dữ liệu
if (isset($_POST['btn_login'])) {
    if (empty($_POST['username']) && empty($_POST['password'])) {
        echo "Tài khoản và mật khẩu không được để trống !!!";
    } else {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data From Textbox</title>
</head>

<body>
    <h1>Đăng Nhập</h1>
    <form action="" method="post"
        style="padding-top:30px;height:100px;width:300px;text-align:center;background-color: navajowhite;">
        Name <input type="text" name="username" value="" style="margin-left: 22px;"><br>
        <br>
        Password <input type="password" name="password" value=""><br>
        <br>

        <input type="submit" name="btn_login" value="Login">
    </form>

</body>

</html>