<?php

function timeConversion($s) {
    $hour = (int) ($s[0] . $s[1]);
    $period = $s[8];

    if ($period == "A" && $hour == 12) {
        $hour = 0;
    } elseif ($period == "P" && $hour != 12) {
        $hour += 12;
    }

    if ($hour < 10) {
        $hour = "0" . $hour;
    }

    return $hour . $s[2] . $s[3] . $s[4] . $s[5] . $s[6] . $s[7];
}

?>