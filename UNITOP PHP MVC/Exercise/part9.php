<?php
// Tính số trang $num_page hiển thị khi có tổng số bài $total_rows và có số bài trên mỗi trang $num_per_page

$total_rows = 101;
$num_per_page = 25;

$num_page = ceil($total_rows / $num_per_page);
echo $num_page;
echo "</br>";

// Xuất 1 mảng số nguyên chẵn từ 1 mảng số nguyên cho trước

$list_number = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 1314, 415, 1412);

$list_even = array();

if (!empty($list_number) && is_array($list_number)) {
    foreach ($list_number as $key => $value) {
        if ($value % 2 == 0) {
            $list_even[] = $value;
        }
    }
    echo "<pre>";
    print_r($list_even);
    echo "</pre>";
}

// Hiện thị danh mục theo đa cấp

$list_post_cat = array(
    array(
        'id' => 1,
        'title' => 'Giáo dục',
        'level' => 0
    ),
    array(
        'id' => 2,
        'title' => 'Khuyến học',
        'level' => 1
    ),
    array(
        'id' => 3,
        'title' => 'Du học',
        'level' => 1
    ),
    array(
        'id' => 4,
        'title' => 'Thể Thao',
        'level' => 0
    ),
    array(
        'id' => 5,
        'title' => 'Châu âu',
        'level' => 1
    ),
    array(
        'id' => 6,
        'title' => 'Tây ban nha',
        'level' => 2
    ),
    array(
        'id' => 7,
        'title' => 'Châu á',
        'level' => 1
    ),
    array(
        'id' => 8,
        'title' => 'Việt nam',
        'level' => 2
    ),
    array(
        'id' => 10,
        'title' => 'Thái lan',
        'level' => 2
    ),
);
// echo "<pre>";
// print_r($list_post_cat);
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện hàm php</title>
</head>

<body>
    <?php
    if (!empty($list_post_cat)) {
    ?>
    <table border="1">
        <thead>
            <tr>
                <td>STT</td>
                <td>Name</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $tmp = 0;
                foreach ($list_post_cat as $value) {
                    $tmp++;
                ?>
            <tr>
                <td><?php echo $tmp ?></td>
                <td><?php echo str_repeat('---', $value['level']) . ' ' . $value['title'] ?></td>
            </tr>
        </tbody>
        <?php
                } ?>
    </table>
    <?php
    }
    ?>
</body>

</html>