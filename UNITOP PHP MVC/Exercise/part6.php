<?php

//Tính tổng các số chẵn từ 1 đến n(n>=2)
//T1 = 2 + 4 + 6 + 8 + ... + n

// $t1 = 0;
// $n1 = 6;
// cách 1
// if ($n1 >= 2) {
//     for ($i = 2; $i <= $n1; $i++) {
//         if ($i % 2 == 0) {
//             $t1 = $t1 + $i;
//         }
//     }
// }
//cách 2
// for ($i = 2; $i <= $n1; $i += 2) {
//     $t1 = $t1 + $i;
// }
// echo "Tổng T1: " . $t1;

//Tính tổng nghich đảo các số chia hết cho 3 từ 3 đến n(n>=3)
//T2 = 1/3 + 1/6 +...+1/n


// $t2 = 0;
// $n2 = 6;
// cách 1
// if ($n2 >= 3) {
//     for ($i = 3; $i <= $n2; $i++) {
//         if ($i % 3 == 0) {
//             $t2 += 1 / $i;
//         }
//     }
// }

//cách 2
// for ($i = 3; $i <= $n2; $i += 3) {
//     $t2 += (1 / $i);
// }
// echo "Tổng T2: " . $t2;

//T3 = 1/2 + 2/3 + 3/4 +...+n/n+1 với đk n>=1

// $t3 = 0;
// $n3 = 1;
// for ($i = 1; $i <= $n3; $i++) {
//     $t3 += (1 / ($i + 1));
// }
// echo "Tổng T3: " . $t3;


//Giai phuong trinh bac 2 ax^2+bx+c=0(a!=0)

$a = 3;
$b = 2;
$c = 1;
echo "Giải phương trình {$a}x^2 + {$b}x + {$c} = 0 (*) </br>";
if ($a !== 0) {
    $delta = ($b * $b) - (4 * $a * $c);
    echo "Delta = " . $delta . "</br>";
    if ($delta < 0) {
        echo "Phương trình vô nghiệm";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        echo "Phương trình (*) có nghiệm kép: x1 = x2 = " . $x;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phương trình (*) có 2 nghiệm phân biệt: x1= {$x1}, x2= {$x2}";
    }
} else {
    echo "Đây không phải là phương trình bậc hai.";
}