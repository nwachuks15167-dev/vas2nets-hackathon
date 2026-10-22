<?php

function birthdayCakeCandles($candles) {
    $tallest = 0;
    $count = 0;

    foreach ($candles as $height) {
        if ($height > $tallest) {
            $tallest = $height;
            $count = 1;
        }
        elseif ($height == $tallest) {
            $count++;
        }
    }

    return $count;
}


?>