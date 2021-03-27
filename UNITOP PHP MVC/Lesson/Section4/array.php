<?php

//Mang 1 chieu
$list_langue = array("js", "ts", "nodejs", "php", "vue");
$list_number = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

echo "<pre>";
print_r($list_langue);
echo "</pre>";
echo "</br>";
echo "<pre>";
print_r($list_number);
echo "</pre>";

// Mang nhieu chieu

$list_user = array(
    0 => array(
        'id' => 1,
        'name' => 'quan',
        'tuoi' => 23
    ),
    1 => array(
        'id' => 1,
        'name' => 'tri',
        'tuoi' => 24
    ),
    2 => array(
        'id' => 2,
        'name' => 'dat',
        'tuoi' => 23
    ),
);
echo "<pre>";
print_r($list_user[0]);
echo "</pre>";