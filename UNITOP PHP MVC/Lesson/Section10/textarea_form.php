<?php
function showArray($data)
{
    if (is_array($data)) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
if (isset($_POST['btn_add'])) {
    showArray($_POST);
    if (empty($_POST['post_detail'])) {
        echo "Error !!!";
    } else {
        echo $_POST['post_detail'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textarea Form</title>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>

<body>
    <h1>Thêm bài viết</h1>
    <form action="" method="POST">
        <label for="post_detail">Chi tiết</label><br><br>
        <textarea name="post_detail" id="post_detail" cols="30" rows="5"></textarea><br><br>
        <input type="submit" name="btn_add" value="Thêm bài viết">
    </form>
    <script>
    CKEDITOR.replace('post_detail');
    </script>
</body>

</html>