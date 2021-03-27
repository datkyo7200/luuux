<?php

function get_header()
{
    $path_header = "inc/header.php";
    if (file_exists($path_header)) {
        return require $path_header;
    } else {
        echo "Không tồn tài đường dẫn {$path_header}";
    }
}

function get_footer()
{
    $path_footer = "inc/footer.php";
    if (file_exists($path_footer)) {
        return require $path_footer;
    } else {
        echo "Không tồn tài đường dẫn {$path_footer}";
    }
}
