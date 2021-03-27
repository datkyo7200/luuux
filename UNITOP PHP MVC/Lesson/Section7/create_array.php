<?php

//Tạo mảng rỗng
$error = array();

$error['userName'] = "User Name invalid!";
echo "<pre>";
print_r($error);
echo "</pre>";

//Tạo mảng với key mặc định
$list_odd = array(1, 3, 5, 7, 9);
echo "<pre>";
print_r($list_odd);
echo "</pre>";

//Tạo mảng với key xác định
// User: Id, Name, Email,Password.

$info = array(
    "id" => 1,
    "fullName" => "Phan Thành Đạt",
    "email" => "datkyo7200@gmail.com",
    "phone" => "0929363719",
    "passWord" => "Chieubuon720"
);

echo "<pre>";
print_r($info);
echo "</pre>";