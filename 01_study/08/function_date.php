<?php 

// 足し算する関数(aとb(=引数)を受け取って足し算をする関数)
// デフォルト値も指定できる
function add($a = 1, $b = 1) {
    $sum = $a + $b;
    return $sum;
}

echo add(1, 3);
var_dump(add());
