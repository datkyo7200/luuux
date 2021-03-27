<?php
ob_start();
session_start();

setcookie('is_login', true, time()-120);
setcookie('user_login', 'Phan Thành Đạt', time()-120);

unset($_SESSION['is_login']);
unset($_SESSION['user_login']);



header("Location: login.php");
