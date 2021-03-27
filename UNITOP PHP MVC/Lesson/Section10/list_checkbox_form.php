<?php
/*
--------------    PHẦN NÀY DÙNG ĐỂ UPDATE GIỎ HÀNG     -----------------
*/

function showArray($data)
{
    if (is_array($data)) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
if (isset($_POST['btn_sec'])) {

    # Cách 1
    if (!empty($_POST['vehicle'])) {
        // foreach ($_POST['vehicle'] as $value) {
        //     echo $value. "<br>";
        // }
        $list_cat = implode('<br>', $_POST['vehicle']);
        echo $list_cat;
    } else {
        echo "You have not chosen !!!";
    }
    # Cách 2
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Form </title>
</head>

<body>
    <form action="" method="post" style="margin:30px">
        <input type="checkbox" name="vehicle[]" value="FZ155I 2021" id="vehicle_1">
        <label for="vehicle_1">Yamaha FZ155I 2021</label><br>
        <input type="checkbox" name="vehicle[]" value="MT-15" id="vehicle_2">
        <label for="vehicle_2">Yamaha MT-15</label><br>
        <input type="checkbox" name="vehicle[]" value="CBR 150" id="vehicle_3">
        <label for="vehicle_3">CBR 150</label><br><br>
        <input type="submit" name="btn_sec" value="Selection">
    </form>
</body>

</html>