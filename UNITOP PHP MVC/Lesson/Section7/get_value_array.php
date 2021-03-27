<?php
//Thêm phần tử có key xác định
$info = array(
    "id" => 1,
    "fullName" => "Phan Thành Đạt",
    "email" => "datkyo7200@gmail.com",
    "phone" => "0929363719",
    "passWord" => "Chieubuon720"
);
echo "<b>Email: {$info['email']}</b></br>";

//Thêm phần tử có key mặc định
$list_odd = array(1, 3, 5, 7);
echo "Phần tử bé nhất là {$list_odd[0]}";