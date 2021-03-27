<?php

function showArray($data)
{
    if (is_array($data)) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
function is_username($username)
{
    $pattern = '/^[A-Za-z][A-Za-z0-9]{5,31}$/';
    if (!preg_match($pattern, $username, $match)) {
        return false;
    }
    return true;
}
function is_password($password)
{
    $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){7,31}$/";
    
    if (!preg_match($pattern, $password, $match)) {
        return false;
    }
    return true;
}
function showErrorForm($label_field)
{
    global $error;
    if (!empty($error[$label_field])) {
        return "<p style='color:red'>{$error[$label_field]}</p>";
    }
}
function setValue($label_field)
{
    global $$label_field;
    if (isset($$label_field)) {
        return $$label_field;
    }
}

//Kiểm tra đã submit form hay chưa??
if (isset($_POST['btn_login'])) {
    $error = array();// Mảng lưu lỗi
    if (empty($_POST['username'])) {
        //Hạ cở
        $error['username'] = "Please Enter your username"."<br>";
    } else {
        if (!(strlen($_POST['username'])>=6 && strlen($_POST['username'])<=32)) {
            $error['username'] = "Username yêu cầu từ 6->32 ký tự";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Username chỉ cho phép sử dụng ký tự, chữ số và có độ dài từ 6->32 ký tự";
            } else {
                $username = $_POST['username'];
            }
        }
    }
    if (!empty($_POST["password"]) && $_POST["password"] != "") {
        /*
        //Cách 1
        if (strlen($_POST["password"]) <= '8') {
            $error['password'] = "Your Password Must Contain At Least 8 Digits !"."<br>";
        } elseif (!preg_match("#[0-9]+#", $_POST["password"])) {
            $error['password'] = "Your Password Must Contain At Least 1 Number !"."<br>";
        } elseif (!preg_match("#[A-Z]+#", $_POST["password"])) {
            $error['password'] = "Your Password Must Contain At Least 1 Capital Letter !"."<br>";
        } elseif (!preg_match("#[a-z]+#", $_POST["password"])) {
            $error['password'] = "Your Password Must Contain At Least 1 Lowercase Letter !"."<br>";
        } elseif (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
            $error['password'] = "Your Password Must Contain At Least 1 Special Character !"."<br>";
        } else {
            $password = $_POST['password'];
        }
        */
        //Cách 2
        if (!is_password($_POST["password"])) {
            $error['password'] = "Password sử dụng chữ cái, chữ số và ký tự đặc biệt, bắt đầu bằng ký tự viết hoa và có ít nhất 8 chữ số nhiều nhất 32 chữ số !"."<br>";
        } else {
            $password = $_POST['password'];
        }
    } else {
        $error['password'] = "Please Enter your password"."<br>";
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
        <input type="text" name="username" id="username"
            value="<?php echo setValue('username') ?>"
            autocomplete="off">
        <?php
            echo showErrorForm('username');
        ?>
        <br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" value="">
        <?php
            echo showErrorForm('password');
        ?>
        <br>
        <input type="submit" name="btn_login" value="Login">
    </form>

</body>

</html>