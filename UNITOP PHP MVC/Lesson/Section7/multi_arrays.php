<?php
//Thêm phần tử có key xác định
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

//Thêm phần tử vào mảng
$list_user[2] = array(
    'id' => 3,
    "fullName" => "Trần Minh Đức",
    "email" => "minhduc@gmail.com",
    "phone" => "0929363719",
    "passWord" => "duc12378"
);

// $list_user[2]['id'] = 3;

echo "<pre>";
print_r($list_user);
echo "</pre>";

//Lấy thông tin trong mảng

echo "<pre>";
print_r($list_user[2]);
echo "</pre>";

echo "Full name: {$list_user[2]['fullName']}";