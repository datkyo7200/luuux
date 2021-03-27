<?php
function showArray($data)
{
    if (is_array($data)) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}


if (isset($_GET['btn_search'])) {
    // showArray($_GET);
    // $q = $_GET['q'];
    // echo $q;
}

#Lấy dữ liệu từ url
$mod = $_GET['mod'];
$act = $_GET['act'];
$id = $_GET['id'];

showArray($_GET);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method GET Form</title>
</head>

<body>
    <a href="?mod=product&act=detail&id=1268">Sản phẩm</a>
    <h1>Tìm Kiếm</h1>
    <form action="" method="get"
        style="padding-top:30px;height:65px;width:300px;text-align:center;background-color: navajowhite;">
        <input type="text" name="q" value="" placeholder="Nhập vào đây">
        <input type="submit" name="btn_search" value="Search">
    </form>

</body>

</html>