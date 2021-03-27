<?php
function showArray($data)
{
    if (is_array($data)) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
if (isset($_POST['rules'])) {
    showArray($_POST);
} else {
    echo "Have not agreed to terms !!!";
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
        <p style="width:250px;height:70px;overflow-y: scroll;">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis ratione, aspernatur rem ad inventore veniam
            voluptas esse molestiae facilis aliquid sunt asperiores quo, animi in pariatur quia amet quisquam a!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis cumque eveniet saepe corporis, possimus
            numquam velit cupiditate, provident doloribus in iure ut, eligendi minus. Voluptate enim assumenda expedita
            vitae cupiditate.
        </p>
        <input type="checkbox" name="rules" id="rules" value="Yes">
        <label for="rules">Đồng ý</label><br><br>
        <input type="submit" name="btn_reg" value="Register">
    </form>
</body>

</html>