<?php
//Lấy dữ liệu form đăng nhập bao gồm: Tên đăng nhập, mật khẩu
    
function showArray($data)
{
    if (is_array($data)) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
// if (isset($_POST['btn_login'])) {
//     if (empty($_POST['username']) && empty($_POST['password'])) {
//         echo "Trường tên đăng nhập và password không được để trống!!!";
//     } else {
//         echo "User Name: ".$_POST['username'].'<br>'.'Password: '.$_POST['password'];
//     }
// }

//Lấy dữ liệu form đăng ký bao gồm: Họ tên, tên đăng nhập, mật khẩu, email, sđt, giới tính.
    
// Tạo link và lấy thông tin từ url
showArray($_GET);
echo 'Module: '.$_GET['mod'].'<br>';
echo 'Action: '.$_GET['act'].'<br>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 10: Form</title>
</head>

<body>
    <!-- <form action="" method="post">
        <br>
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username" placeholder="Nhập username or email"><br><br>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password" placeholder="Nhập password facebook"><br><br>
        <input type="submit" name="btn_login" value="Đăng Nhập">
    </form> -->
    <a href="?mod=product&act=main">Sản phẩm</a>
</body>

</html>