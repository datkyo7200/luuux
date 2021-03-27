<?php

$list_user = array(
    array('username' => 'datkyo7200', 'password' => '1234'),
    array('username' => 'datkyo7201', 'password' => '1235')
);

$name = $_POST['username'];
$pw = $_POST['password'];
echo '<pre>';
print_r($_POST);
echo '</pre>';
// if (isset($_POST['login'])) {
// }
// foreach ($list_user as $user) {
//     echo '<pre>';
//     print_r($user);
//     echo '</pre>';
//     if ($name === $user['username'] && $pw === $user['password']) {
//         echo 'Đăng nhập thành công';
//     } else {
//         echo 'Sai tài khoản hoặc mật khẩu';
//     }
// }