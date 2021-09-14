<?php 
$num = 12;
$res = true;

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) { //この条件が合えば､素数ではなくなる!
        $res = false;   //ここでresに$numが代入される = 素数ではない
        break;
    } 
}

if ($res) {  //代入されてたら(==で表さねばならない)､TRUEになり､されてなかったらNULLでFALSEになる
    echo "{$num}は素数です｡"; //代入されたら､素数ではない
} else {
    echo "{$num}は素数ではありません｡"; //代入されてなかったら､素数である
}
