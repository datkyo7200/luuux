<?php

$my_str = "phan thanh dat";

//Hàm đếm số ký tự của chuỗi
echo strlen($my_str);
echo "</br>";

//Hàm in hoa ký tự đầu tiên
echo ucfirst($my_str);
echo "</br>";

//Hàm in hoa ký tự
echo ucwords($my_str);
echo "</br>";

//Hàm loại bỏ ký tự khoảng trắng dư thừa
$fullName = "Phan        Thành Đạt";
echo trim($fullName);
echo "</br>";

//Hàm lặp chuỗi
echo str_repeat('-', 2);
echo "</br>";

//Hàm mã hóa chuỗi

$pass_word = "phanthanhdat98";
echo md5($pass_word);
echo "</br>";

//1. Hàm kết hợp chuỗi
$list_id = array(1, 3, 4, 6);
echo join(",", $list_id);
echo "</br>";

//2. Hàm kết hợp chuỗi
$list_id = array(1, 3, 4, 6);
echo implode("-", $list_id);
echo "</br>";

//Hàm phân tách một chuỗi theo một chuỗi
// Example 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
echo "<pre>";
print_r($pieces);
echo "</pre>";
echo "</br>";
// Example 2
$data = "datkyo7200:phanthandat98:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *
echo "</br>";
//Hàm bảo mật, xử lý mã độc

$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;