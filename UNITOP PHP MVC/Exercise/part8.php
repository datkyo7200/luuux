<?php

// Xây dựng hàm kiểm tra số nguyên chẵn

//Cách 1
function check_even($n)
{
    if ($n % 2 == 0) {
        return "{$n} là số nguyên chẵn";
    } else {
        return "{$n} là số nguyên lẻ";
    }
}
// echo check_even(3);

//Cách 2
// function check_even1($n)
// {
//     if ($n % 2 == 0)
//         return true;
//     return false;
// }
// if (check_even1(10)) {
//     echo "Đây là số nguyên chẵn";
// } else {
//     echo "Đây là số nguyên lẻ";
// }

// Tính tổng các số nguyên tố từ 2->$n($n>=2)

function check_prime($n)
{
    if ($n < 2) {
        return false;
    }
    $squareRoot = sqrt($n);

    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo check_prime(6);
function total_prime($n)
{
    $t = 0;
    for ($i = 0; $i < $n; $i++) {
        if (check_prime($i)) {
            $t += $i;
        }
    }
    echo $t;
}
// total_prime(4);

//Hàm lấy thông tin chi tiết một bài viết theo id trong mảng bài viết

$list_product = array(
    array(
        'id' => 101,
        'name' => 'OPPO Reno 5',
        'price' => 8690000,
        'content' => 'Đặc điểm nổi bật của OPPO Reno5 Bộ sản phẩm chuẩn: Cáp, Cây lấy sim, Hộp, Sách hướng dẫn, Sạc, Tai nghe, Ốp lưng OPPO vừa kịp ra mắt thế hệ OPPO Reno mới nhất của mình vào dịp cuối năm 2020. OPPO Reno5 là sự kết hợp đầy ấn tượng giữa hiệu năng và thiết kế, mang đến cho người dùng một chiếc điện thoại tích hợp nhiều công nghệ camera, sạc pin hàng đầu của OPPO trong một mức giá tầm trung.',
        'image' => 'https://cdn.tgdd.vn/Products/Images/42/220438/TimerThumb/oppo-reno5-(2).jpg',
        'brand' => 'Oppo',
        'category' => 'Phone',
    ),
    array(
        'id' => 102,
        'name' => 'iPhone 12 64GB',
        'price' => 23490000,
        'content' => "Trong những tháng cuối năm 2020 Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bức phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.",
        'image' => 'https://cdn.tgdd.vn/Products/Images/42/213031/TimerThumb/iphone-12-(2).jpg',
        'brand' => 'Iphone',
        'category' => 'Phone',
    ),
    array(
        'id' => 103,
        'name' => 'Xiaomi Redmi 9T',
        'price' => 4690000,
        'content' => "Xiaomi tiếp tục “phá đảo” phân khúc giá rẻ tầm trung với Xiaomi Redmi 9T 6GB/128GB. Nổi bật với thiết kế trẻ trung, màn hình tràn siêu lớn, bộ 4 camera AI, pin cực khủng, mẫu smartphone này sẽ thỏa mãn mọi nhu cầu giải trí, niềm đam mê sáng tạo và khám phá không ngừng của giới trẻ.",
        'image' => 'https://cdn.tgdd.vn/Products/Images/42/233130/xiaomi-redmi-9t-6gb-110621-080650-600x600.jpg',
        'brand' => 'Xiaomi',
        'category' => 'Phone',
    ),
    array(
        'id' => 104,
        'name' => 'Samsung Galaxy S21 Ultra 5G',
        'price' => 30990000,
        'content' => 'Đặc điểm nổi bật của Samsung Galaxy A12 (6GB/128GB) Bộ sản phẩm chuẩn: Hộp, Sạc, Cáp, Cây lấy sim, Sách hướng dẫn Gây ấn tượng với bộ tứ camera thời thượng, hiệu năng ổn định mang đến sự mượt mà trong mọi tác vụ, cùng thời lượng pin ấn tượng, Samsung Galaxy A12 (6GB/128GB) sẽ là mẫu smartphone đáng mua nhất trong phân khúc tầm trung giá rẻ của Samsung.',
        'image' => 'https://cdn.tgdd.vn/Products/Images/42/232364/samsung-galaxy-a12-trang-600x600-600x600.jpg',
        'brand' => 'Samsung',
        'category' => 'Phone',
    ),
    array(
        'id' => 105,
        'name' => 'OPPO Reno 5',
        'price' => 8690000,
        'content' => 'Đặc điểm nổi bật của OPPO Reno5 Bộ sản phẩm chuẩn: Cáp, Cây lấy sim, Hộp, Sách hướng dẫn, Sạc, Tai nghe, Ốp lưng OPPO vừa kịp ra mắt thế hệ OPPO Reno mới nhất của mình vào dịp cuối năm 2020. OPPO Reno5 là sự kết hợp đầy ấn tượng giữa hiệu năng và thiết kế, mang đến cho người dùng một chiếc điện thoại tích hợp nhiều công nghệ camera, sạc pin hàng đầu của OPPO trong một mức giá tầm trung.',
        'image' => 'https://cdn.tgdd.vn/Products/Images/42/220438/TimerThumb/oppo-reno5-(2).jpg',
        'brand' => 'Oppo',
        'category' => 'Phone',
    ),
    array(
        'id' => 106,
        'name' => 'IPhone 12 64GB',
        'price' => 23490000,
        'content' => "Trong những tháng cuối năm 2020 Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bức phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.",
        'image' => 'https://cdn.tgdd.vn/Products/Images/42/213031/TimerThumb/iphone-12-(2).jpg',
        'brand' => 'Iphone',
        'category' => 'Phone',
    ),
    array(
        'id' => 107,
        'name' => 'Xiaomi Redmi 9T',
        'price' => 4690000,
        'content' => "Xiaomi tiếp tục “phá đảo” phân khúc giá rẻ tầm trung với Xiaomi Redmi 9T 6GB/128GB. Nổi bật với thiết kế trẻ trung, màn hình tràn siêu lớn, bộ 4 camera AI, pin cực khủng, mẫu smartphone này sẽ thỏa mãn mọi nhu cầu giải trí, niềm đam mê sáng tạo và khám phá không ngừng của giới trẻ.",
        'image' => 'https://cdn.tgdd.vn/Products/Images/42/233130/xiaomi-redmi-9t-6gb-110621-080650-600x600.jpg',
        'brand' => 'Xiaomi',
        'category' => 'Phone',
    ),
    array(
        'id' => 108,
        'name' => 'Samsung Galaxy S21 Ultra 5G',
        'price' => 30990000,
        'content' => 'Đặc điểm nổi bật của Samsung Galaxy A12 (6GB/128GB) Bộ sản phẩm chuẩn: Hộp, Sạc, Cáp, Cây lấy sim, Sách hướng dẫn Gây ấn tượng với bộ tứ camera thời thượng, hiệu năng ổn định mang đến sự mượt mà trong mọi tác vụ, cùng thời lượng pin ấn tượng, Samsung Galaxy A12 (6GB/128GB) sẽ là mẫu smartphone đáng mua nhất trong phân khúc tầm trung giá rẻ của Samsung.',
        'image' => 'https://cdn.tgdd.vn/Products/Images/42/232364/samsung-galaxy-a12-trang-600x600-600x600.jpg',
        'brand' => 'Samsung',
        'category' => 'Phone',
    ),
);
function get_details_post_by_id($id)
{
    global $list_product;
    /*Cách 1*/
    // foreach ($list_product as $key => $value) {
    //     if ($value['id'] == $id) {
    //         return $value['name'];
    //     }
    // }
    /* Cách 2 */
    if (array_key_exists($id, $list_product))
        return $list_product[$id]['name'];
    return false;
}
$item = get_details_post_by_id(2);

echo "<pre>";
print_r($item);
echo "</pre>";