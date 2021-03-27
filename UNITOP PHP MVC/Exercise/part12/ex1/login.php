<?php

function redirect_to($url)
{
    if (!empty($url)) {
        return header("Location: $url");
    } else {
        return false;
    }
}
redirect_to('index.php');
