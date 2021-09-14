<?php 

$score = 10;

if ($score >= 60) {
    echo "合格です";
} elseif (30 <= $score && 60 > $score) {
    echo "追試です";
} else {
    echo "不合格です";
}
