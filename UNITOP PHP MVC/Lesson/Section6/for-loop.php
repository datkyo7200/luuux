<?php
//Tính tổng các số từ 0 đến 10 
// T = 0 + 2 + 4 + 6 + 8 + 10

$t = 0;

for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        $t += $i;
        echo $i . "<br>";
        echo "<br>-------------------</br>";
        echo $t . "<br>";
    }
}
echo "Tổng các số từ 0->10 là: " . $t;