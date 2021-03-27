<?php
//Tính tổng các số từ 0 đến 10 
// T = 0 + 2 + 4 + 6 + 8 + 10
$t = 0;
$i = 0;

while ($i <= 10) {
    $t += $i;
    $i += 2;
}
echo "Tổng là:" . $t;