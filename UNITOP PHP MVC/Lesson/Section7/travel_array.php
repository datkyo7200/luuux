<?php

//Duyệt mảng 1 chiều
$list_prime = array(2, 3, 5, 7);

//tính tổng các số nguyên tố
$t = 0;
foreach ($list_prime as $item) {
    echo $item . "</br>";
    $t = $t + $item;
    //$t += $item;
}

echo "Tổng là: " . $t;

//Duyệt mảng nhiều chiều

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

foreach ($list_user as $item) {
    echo "</br>{$item['id']}";
    echo "</br>{$item['fullName']}";
    echo "</br>{$item['email']}";
    echo "</br>----------------------------";
}