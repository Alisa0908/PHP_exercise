<?php 

$fruits = ['banana', 'apple', 'melon', 'cherry'];
// countで､配列の数を数えて取得してくると全部乗せることができる◎
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . '<br>';
}

