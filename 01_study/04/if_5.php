<?php 

//どちらのテストも80点以上 : 合格､ 

$score_1 = 80;
$score_2 = 80;

if ($score_1 >= 80 && $score_2 >= 80) {
    echo '合格';
} elseif ($score_1 >= 80 || $score_2 >= 80) {
    echo '追試';
} else {
    echo '不合格';
}
