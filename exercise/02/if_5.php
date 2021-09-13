<?php 
$num = 11;
$res = NULL;

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) { //この条件が合えば､素数ではなくなる!
        $res = $num;   //ここでresに$numが代入される = 素数ではない
        break;
    } 
}

if ($res == $num) {  //代入されてたら(==で表さねばならない)､TRUEになり､されてなかったらNULLでFALSEになる
    echo "{$num}は素数ではありません｡"; //代入されたら､素数ではない
} else {
    echo "{$num}は素数です｡"; //代入されてなかったら､素数である
}
