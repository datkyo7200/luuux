<?php
function showArray($data)
{
    if (is_array($data)) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
if (isset($_POST['btn_order'])) {
    showArray($_POST);
    if (empty($_POST['pay'])) {
        echo "Error !!!";
    } else {
        echo $_POST['pay'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Form</title>
</head>

<body>
    <h1>Đặt hàng</h1>
    <form action="" method="POST">
        <select name="pay" id="">
            <option value="">---Chọn---</option>
            <option value="cod">Thanh toán tại nhà</option>
            <option value="banking">Thanh toán qua thẻ tín dụng</option>
        </select>
        <input type="submit" name="btn_order" value="Đặt Hàng">
    </form>
</body>

</html>