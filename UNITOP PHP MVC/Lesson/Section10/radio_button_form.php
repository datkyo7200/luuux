<?php
function showArray($data)
{
    if (is_array($data)) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
$show_gender = array(
    'male'=>'Nam',
    'female'=>'Nữ'
);
if (isset($_POST['gender'])) {
    showArray($_POST);
    echo $show_gender[$_POST['gender']];
} else {
    echo "Gender has not been selected  !!!";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button </title>
</head>

<body>
    <form action="" method="post">
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Nam</label><br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Nữ</label><br>
        <input type="submit" name="btn_reg" value="Register">
    </form>
</body>

</html>