<?php

function miniMaxSum($arr) {
    $total = 0;
    $smallest = $arr[0];
    $largest = $arr[0];

    foreach ($arr as $number) {
        $total += $number;

        if ($number < $smallest) {
            $smallest = $number;
        }

        if ($number > $largest) {
            $largest = $number;
        }
    }

    $minimum = $total - $largest;
    $maximum = $total - $smallest;

    echo $minimum . " " . $maximum;
}

?>