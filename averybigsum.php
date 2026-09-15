<?php
function aVeryBigSum($ar) {
    
$sum = 0;
foreach($ar as $number){
    $sum += $number;
}
return $sum;
}


?>