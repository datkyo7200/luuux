<?php
//Thêm phần tử có key xác định
$info = array(
    "id" => 1,
    "fullName" => "Phan Thành Đạt",
    "email" => "datkyo7200@gmail.com",
    "phone" => "0929363719",
    "passWord" => "Chieubuon720"
);
$info['id'] = 2;
echo "<b>Id: {$info['id']}</b></br>";

//Thêm phần tử có key mặc định
$list_odd = array(1, 3, 5, 7);
$list_odd[1] = 9;
echo "Phần tử thứ {$list_odd[1]}";