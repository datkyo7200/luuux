<?php

// Hàm is_array hàm kiểm tra có phải mảng hay không.
// $yes = array('đây', 'là', 'mảng');

// echo is_array($yes) ? 'Mảng' : 'Không phải mảng';
// echo "</br>";

// $no = 'đây là chuổi';
// echo is_array($no) ? 'Mảng' : 'Không phải mảng';
//Duyệt mảng 1 chiều
$list_prime = array(2, 3, 5, 7);
$list_user = array(
    array(
        "id" => 111,
        "fullName" => "Phan Thành Đạt",
        "email" => "datkyo7200@gmail.com",
        "phone" => "0929363719",
        "passWord" => "Chieubuon720"
    ),
    array(
        "id" => 112,
        "fullName" => "Nguyễn Thành Nam",
        "email" => "lamtruong@gmail.com",
        "phone" => "0929363719",
        "passWord" => "lamtruong123"
    ),
    array(
        'id' => 113,
        "fullName" => "Trần Minh Đức",
        "email" => "minhduc@gmail.com",
        "phone" => "0929363719",
        "passWord" => "duc12378"
    )
);
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
    <title>Nhúng dữ liệu mảng lên HTML</title>
</head>

<body>
    <h1>Danh sách số nguyên tố</h1>
    <table border="1">
        <thead style=" text-align:center">
            <tr>
                <td width="50">STT</td>
                <td width="200">Số Nguyên Tố</td>
            </tr>
        </thead>
        <tbody style=" text-align:center">
            <?php
            $numerical_order = 0;
            foreach ($list_prime as $value) {
                $numerical_order++;
            ?>
            <tr>
                <td>
                    <?php echo $numerical_order ?>
                </td>
                <td>
                    <?php echo $value ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <h1>Danh sách người dùng</h1>
    <?php
    if (!empty($list_user)) { ?>
    <table border="1" style="text-align:center;background-color:aliceblue">
        <thead style="font-weight: bold;">
            <tr>
                <td width="50">STT</td>
                <td width="50">ID</td>
                <td width="200">Full Name</td>
                <td width="200">Email</td>
                <td width="100">Phone</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $numerical_user = 0;
                foreach ($list_user as $user) {
                    // showArray($user);
                    $numerical_user++;
                ?>
            <tr>
                <td><?php echo $numerical_user ?></td>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['fullName'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['phone'] ?></td>
            </tr>
            <?php

                } ?>
        </tbody>

    </table>
    <?php } else {
    ?>
    <p>Không có thành viên nào!</p>
    <?php
    }
    ?>
</body>

</html>