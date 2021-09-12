<?php 
$num = 73;

// for ($i=2; $i<$num; $i++) {
//     if ($num%$i == 0) {
//         echo "{$num}は素数ではありません｡";
//     } else {
//         echo "{$num}は素数です｡";
//     }
// }

if ( for ($i=2; $i<$num; $i++) { $num % $i == 0 }) {
    echo "{$num}は素数ではありません｡";
} else {
    echo "{$num}は素数です｡";  
}

