<?php

function is_username($username)
{
    $pattern = '/^[A-Za-z][A-Za-z0-9]{5,31}$/';
    if (!preg_match($pattern, $username, $match)) {
        return false;
    }
    return true;
}

function is_password($password)
{
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";

    if (!preg_match($pattern, $username, $match)) {
        return false;
    }
    return true;
}
function showErrorForm($label_field)
{
    global $error;
    if (!empty($error[$label_field])) {
        return "<p style='color:red'>{$error[$label_field]}</p>";
    }
}
function setValue($label_field)
{
    global $$label_field;
    if (isset($$label_field)) {
        return $$label_field;
    }
}
// is_email
// is_phone_number
