<?php
//=====================
//Cấu trúc điều khiển if
//=====================

#if-else
//Kiểm tra số chẵn lẽ
// $a = 11;
// if ($a % 2 == 0) {
//     echo "{$a} là số chẵn";
// } else {
//     echo "{$a} là số lẽ";
// }

#if-elseif-else
//Kiểm tra điểm
// $point = 11;

// if ($point < 4) {
//     echo "<strong>Bạn thuộc điểm F</strong>";
// } elseif ($point < 5.5) {
//     echo "<strong>Bạn thuộc điểm D</strong>";
// } elseif ($point < 7) {
//     echo "<strong>Bạn thuộc điểm C</strong>";
// } elseif ($point < 8.5) {
//     echo "<strong>Bạn thuộc điểm B</strong>";
// } elseif ($point <= 10) {
//     echo "<strong>Bạn thuộc điểm A</strong>";
// } else {
//     echo "<strong>Error!</strong>";
// }

#Cấu trúc câu điều kiện lồng nhau
$point = 11;
if ($point >= 0 && $point <= 10) {
    if ($point < 4) {
        echo "<strong>Bạn thuộc điểm F</strong>";
    } elseif ($point < 5.5) {
        echo "<strong>Bạn thuộc điểm D</strong>";
    } elseif ($point < 7) {
        echo "<strong>Bạn thuộc điểm C</strong>";
    } elseif ($point < 8.5) {
        echo "<strong>Bạn thuộc điểm B</strong>";
    } else {
        echo "<strong>Bạn thuộc điểm A</strong>";
    }
} else {
    echo "<strong>Error!</strong>";
}