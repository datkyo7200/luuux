<?php
//Xóa phần tử vào mảng 1 chiều
$info_user = array(
    'id' => 3,
    "fullName" => "Trần Minh Đức",
    "email" => "minhduc@gmail.com",
    "phone" => "0929363719",
    "passWord" => "duc12378"
);

echo "<pre>";
print_r($info_user);
echo "</pre>";

unset($info_user['passWord']);

echo "<pre>";
print_r($info_user);
echo "</pre>";

//Xóa phần tử vào mảng nhiều chiều
$list_user = array(
    array(
        "id" => 1,
        "fullName" => "Phan Thành Đạt",
        "email" => "datkyo7200@gmail.com",
        "phone" => "0929363719",
        "passWord" => "Chieubuon720"
    ),
    array(
        "id" => 2,
        "fullName" => "Nguyễn Thành Nam",
        "email" => "lamtruong@gmail.com",
        "phone" => "0929363719",
        "passWord" => "lamtruong123"
    ),
);
echo "<pre>";
print_r($list_user);
echo "</pre>";

unset($list_user[0]['passWord']);

echo "<pre>";
print_r($list_user);
echo "</pre>";