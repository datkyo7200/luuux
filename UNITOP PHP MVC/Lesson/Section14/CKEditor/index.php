<?php
function showArray($data)
{
    if (is_array($data)) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
if (isset($_POST['detail'])) {
    if (!empty($_POST['detail'])) {
        echo $_POST['detail'];
    } else {
        echo "Bạn chưa nhập nội dung";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tích hợp soạn thảo văn bản vào website</title>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
</head>

<body>
    <h1>Form CKEditor</h1>
    <form action="" method="post">
        <label for="title">Nội dung Chi tiết: </label><br>
        <br>
        <textarea name="detail" id="editor"></textarea>
        <br>
        <input type="submit" style="background-color:#1e90ff;cursor:pointer;color:white" name="btn_add"
            value="Thêm Bài Viết">
    </form>
    <script>
    var editor = CKEDITOR.replace('editor');
    CKFinder.setupCKEditor(editor);
    </script>
</body>

</html>