<?php
//Thêm phần tử có key xác định
$info = array(
    "id" => 1,
    "fullName" => "Phan Thành Đạt",
    "email" => "datkyo7200@gmail.com",
    "phone" => "0929363719",
    "passWord" => "Chieubuon720"
);
$info['address'] = 'Q1, Ho Chi Minh City';
echo "<pre>";
print_r($info);
echo "</pre>";

//Thêm phần tử có key mặc định
$list_odd = array(1, 3, 5, 7);
$list_odd[] = 9;
echo "<pre>";
print_r($list_odd);
echo "</pre>";