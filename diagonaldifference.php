<?php

function diagonalDifference($arr) {
    $left = 0;
    $right = 0;
    $n = 0;

    foreach ($arr as $row) {
        $n++;
    }

    for ($i = 0; $i < $n; $i++) {
        $left = $left + $arr[$i][$i];
        $right = $right + $arr[$i][$n - 1 - $i];
    }

    $difference = $left - $right;

    if ($difference < 0) {
        $difference = $difference * -1;
    }

    return $difference;
}
?>