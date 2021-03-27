<?php
//Tạo mảng lưu các số lẻ từ 3->150
// $number_odd = array();

// for ($i = 3; $i < 150; $i += 2) {
//     $number_odd[] = $i;
// }
// echo "<pre>";
// print_r($number_odd);
// echo "</pre>";

//Tạo mảng đa chiều quản lý các bài viết trong website tin tức

$list_post = array(
    array(
        'id' => 101,
        'title' => "'Manchester City đang có cơ hội tuyệt vời để vô địch Champions League'",
        'content' => 'TTO - Ở sự kiện đấu võ Channel 7 Muay Thai diễn ra mới đây ở Thái Lan, võ sĩ Robert Sor.Thanabaworn đã thắng knock-out ấn tượng nhờ "cú sút ngàn cân" kiểu bóng đá, khiến đối thủ Saklek Kiatphetdecha đổ gục xuống sàn đấu không gượng dậy nổi.',
        'image' => 'https://cdn.tuoitre.vn/2021/2/25/man-16142109478411680304290.jpg',
        'highlight' => 1,
        'category' => 'Thể Thao',
    ),
    array(
        'id' => 102,
        'title' => "'J-League không quá tầm của cầu thủ Việt'",
        'content' => "TTO - Ngày 25-2, tân HLV trưởng CLB Sài Gòn Shimoda Masahiro đã có những chia sẻ về lối chơi ông sẽ áp dụng ở CLB và những lời khuyên dành cho cầu thủ VN nếu có cơ hội sang Nhật Bản thi đấu.",
        'image' => 'https://cdn.tuoitre.vn/2021/2/26/hlv-shimoda-ngay-25-2-1read-only-1614307769343458039909.jpg',
        'highlight' => 0,
        'category' => 'Thể Thao',
    ),
    array(
        'id' => 103,
        'title' => "Champions League: Các đại gia dần thích ứng",
        'content' => "TTO - Rạng sáng 25-2 (giờ VN), Real Madrid cùng Man City đã giành được những chiến thắng quan trọng trên sân khách. Với kết quả này, nhiều khả năng vòng 16 đội Champions League sẽ không chứa đựng bất ngờ nào..",
        'image' => 'https://cdn.tuoitre.vn/2021/2/26/atalanta-ngay-25-2-1read-only-16143083654741428584979.jpg',
        'highlight' => 0,
        'category' => 'Thể Thao',
    ),
    array(
        'id' => 104,
        'title' => "Arsenal 'nghẹt thở' giành vé đi tiếp",
        'content' => "TTO - Rạng sáng 26-2, tiền đạo Pierre-Emerick Aubameyang đã lập cú đúp giúp Arsenal đánh bại Benfica 3-2 trên sân nhà trong trận lượt về nghẹt thở để giành vé đi tiếp vào vòng 16 đội Europa League.",
        'image' => 'https://cdn.tuoitre.vn/2021/2/26/1-1614289039883896967959.jpg',
        'highlight' => 0,
        'category' => 'Thể Thao',
    ),
);
// echo "<pre>";
// print_r($list_post);
// echo "</pre>";
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
        'name' => 'iPhone 12 64GB',
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
// echo "<pre>";
// print_r($list_product);
// echo "</pre>";
function showArray($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } else {
        echo "Không phải mảng";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanhdat.vn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <h2>Danh Sách Bài Viết Thể Thao</h2>
        <?php
        if (!empty($list_post)) {
            foreach ($list_post as $post) {
                // showArray($post);
        ?>
        <?php
                if ($post['highlight'] === 1) {
                ?>
        <div class="row">
            <img src="<?php echo $post['image'] ?>" alt="" width="100%" class="col-8">
            <div class="col-4">
                <h3><a href="#" style="text-decoration: none; color:black"><?php echo $post['title'] ?></a></h3>
            </div>
        </div>
        <?php } else { ?>
        <div class="row" style="margin-top:10px">
            <div class="col-4">
                <img src="<?php echo $post['image'] ?>" alt="" width="100%">
                <h5><a href="#" style="text-decoration: none; color:black"><?php echo $post['title'] ?></a></h5>
            </div>
        </div>
        <?php
                }
            }
        }
        ?>
        <h2 style="margin-top:20px;">Danh Sách Điện Thoại</h2>
        <div class="row" style="text-align:center">
            <?php
            if (!empty($list_product)) {
                foreach ($list_product as $product) {
                    // showArray($product)
            ?>
            <div class="col-4" style="background-color: #e6f2ff;padding-top:20px">
                <img src="<?php echo $product['image'] ?>" alt="" width="50%">
                <h6><?php echo $product['id'] ?></h6>
                <h5><a href="#" style="text-decoration: none; color:black"> <?php echo $product['name'] ?> </a></h5>
                <h5 style="color:red">Giá: <?php echo number_format($product['price']) . 'đ' ?> </h5>
            </div>
            <?php }
            } ?>
        </div>
    </div>
    </div>
</body>

</html>