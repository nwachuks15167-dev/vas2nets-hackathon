<?php
function simpleArraySum($ar) {
    $sum = 0;
    foreach($ar as $number){
        $sum += $number; 
    }
    
    return $sum;

}
?>