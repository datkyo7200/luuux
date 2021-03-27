<?php

// Hàm kiểm tra phần tử có trong mảng
$search_array = array('a' => 1, 'b' => 4);
if (array_key_exists('c', $search_array)) {
    echo "Oke";
} else {
    echo "No Oke";
}
//Hàm kết hợp mảng
$arr1 = array(1, 2, 3);
$arr2 = array(4, 5, 6);
$arr3 = array(7, 8, 9);
$result = array_merge($arr1, $arr2, $arr3);

echo "<pre>";
print_r($result);
echo "</pre>";

//Hàm đếm số lượng phần tử của mảng
$arr4 = array(1, 2, 3);
echo count($arr4);
echo "</br>";

//Kiểm tra giá trị thuộc vào 1 mảng hay không
$arr5 = array(1, 2, 3);
echo in_array(3, $arr5);
echo "</br>";

//Hàm kiểm tra biến đấy có phải 1 mảng hay không
$my_arr = array();
echo is_array($my_arr);