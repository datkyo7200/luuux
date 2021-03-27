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
if (isset($_POST['btn_register'])) {
    showArray($_POST);
    $error = array();// Mảng lưu lỗi
    if (empty($_POST['username'])) {
        //Hạ cở
        $error['username'] = "Không được để trống trường username";
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['gender'])) {
        //Hạ cở
        $error['gender'] = "Không được để trống trường gender";
    } else {
        $gender = $_POST['gender'];
    }
    if (empty($_POST['password'])) {
        //Hạ cở
        $error['password'] = "Không được để trống trường password";
    } else {
        $password = $_POST['password'];
    }
    if (empty($error)) {
        echo $username."-".$password."-".$gender;
    }
}
function setValue($label_field)
{
    global $$label_field;
    if (isset($$label_field)) {
        return $$label_field;
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
    <h1>Đăng Ký</h1>
    <form action="" method="post">
        <br>
        <label for="username">User Name</label><br>
        <input type="text" name="username" id="username"
            value="<?php echo setValue('username') ?>"
            autocomplete="off">
        <p style="color:red">
            <?php if (!empty($error['username'])) {
    echo $error['username'];
} ?>
        </p>
        <label for="gender">Giới tính</label><br>
        <select name="gender" id="gender">
            <option value="">---Chọn---</option>
            <option <?php if (!empty($_POST['gender']) && $_POST['gender'] ==='male') {
    echo "selected";
}  ?>
                value="male">
                Nam
            </option>
            <option <?php
            if (!empty($_POST['gender']) && $_POST['gender'] ==='female') {
                echo "selected";
            } ?>
                value="female">Nữ
            </option>
        </select>
        <p style="color:red">
            <?php
            if (!empty($error['gender'])) {
                echo $error['gender'];
            } ?>
        </p>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" value="">
        <p style="color:red">
            <?php
            if (!empty($error['password'])) {
                echo $error['password'];
            } ?>
        </p>
        <input type="submit" name="btn_register" value="Register">
    </form>

</body>

</html>