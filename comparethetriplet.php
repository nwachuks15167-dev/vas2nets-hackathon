<?php

function compareTriplets($a, $b) {
    $aliceScore = 0;
    $bobScore = 0;
    
    for ($i = 0; $i < 3; $i++) {
        if ($a[$i] > $b[$i]) {
            $aliceScore++;
        } elseif ($a[$i] < $b[$i]) {
            $bobScore++;
        }
    }

    return [$aliceScore, $bobScore];
}
      
?>