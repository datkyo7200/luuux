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
function is_phone($phone)
{
    $pattern = "/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/";
    
    if (!preg_match($pattern, $phone, $match)) {
        return false;
    }
    return true;
}
function is_fullname($fullname)
{
    $pattern = "/^[a-zA-Z'-]+$/";
    
    if (!preg_match($pattern, $fullname, $match)) {
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
if (isset($_POST['btn_register'])) {
    $error = array();
    if (empty($_POST['fullname'])  && $_POST["fullname"] === "") {
        $error['fullname'] = "Please Enter your fullname"."<br>";
    } else {
        if (!is_fullname($_POST['fullname'])) {
            $error['fullname'] = "Name is not valid! It must not contain numbers or special characters";
            exit;
        } else {
            $fullname = $_POST['fullname'];
        }
    }
    if (empty($_POST['username'])  && $_POST["username"] === "") {
        $error['username'] = "Please Enter your username"."<br>";
    } else {
        if (!(strlen($_POST['username'])>=6 && strlen($_POST['username'])<=32)) {
            $error['username'] = "username yêu cầu từ 6->32 ký tự";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "username chỉ cho phép sử dụng ký tự, chữ số và có độ dài từ 6->32 ký tự";
            } else {
                $username = $_POST['username'];
            }
        }
    }
    if (empty($_POST["phone"]) && $_POST["phone"] === "") {
        $error['phone'] = "Please Enter your phone"."<br>";
    } else {
        if (!(strlen($_POST['phone'])>=10 && strlen($_POST['phone'])<=14)) {
            $error['phone'] = "phone yêu cầu từ 6->32 ký tự";
        } else {
            if (!is_phone($_POST["phone"])) {
                $error['phone'] = "Phone number is not valid!";
            } else {
                $phone = $_POST['phone'];
            }
        }
    }
    if (empty($_POST["password"]) && $_POST["password"] === "") {
        $error['password'] = "Please Enter your password"."<br>";
    } else {
        if (!is_password($_POST["password"])) {
            $error['password'] = "Password sử dụng chữ cái, chữ số và ký tự đặc biệt, bắt đầu bằng ký tự viết hoa và có ít nhất 8 chữ số nhiều nhất 32 chữ số !"."<br>";
        } else {
            $password = md5($_POST['password']);
            echo $password;
        }
    }
    if (empty($error)) {
        echo $fullname."-".$username."-".$phone."-".$password;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Form</title>
</head>

<body style="margin-left:30px">
    <h1>Đăng Ký</h1>
    <form action="" method="post">
        <label for="fullname">Họ và tên</label><br>
        <input type="text" name="fullname" id="fullname"
            value="<?php setValue('fullname') ?>"
            autocomplete="off">
        <?php
            echo showErrorForm('fullname');
        ?>
        <br>
        <br>
        <label for="username">Tên đăng nhập</label><br>
        <input type="text" name="username" id="username"
            value="<?php setValue('username') ?>"
            autocomplete="off">
        <?php
            echo showErrorForm('username');
        ?>
        <br>
        <br>
        <label for="phone">Số điện thoại</label><br>
        <input type="number" name="phone" id="phone"
            value="<?php setValue('phone') ?>"
            autocomplete="off">
        <?php
            echo showErrorForm('phone');
        ?>
        <br>
        <br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" value="">
        <?php
            echo showErrorForm('password');
        ?>
        <br>
        <br>
        <input type="submit" name="btn_register" value="Đăng Ký">
    </form>
</body>

</html>