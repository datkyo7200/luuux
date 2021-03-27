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

showArray($_SERVER);
//Kiểm tra đã submit form hay chưa??
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $pw = $_POST['password'];
    // showArray($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method POST Form</title>
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