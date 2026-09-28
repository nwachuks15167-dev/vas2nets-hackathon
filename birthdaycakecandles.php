<?php

function birthdayCakeCandles($candles) {
    $maxHeight = max($candles);
    $count = 0;
    
    foreach ($candles as $candle) {
        if ($candle == $maxHeight) {
            $count++;
        }
    }
    
    return $count;
}

?>