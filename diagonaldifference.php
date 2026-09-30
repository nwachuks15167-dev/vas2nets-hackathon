<?php

function diagonalDifference($arr) {
    $n = count($arr);
    $primaryDiagonal = 0;
    $secondaryDiagonal = 0;
    
    for ($i = 0; $i < $n; $i++) {
        $primaryDiagonal += $arr[$i][$i];
        $secondaryDiagonal += $arr[$i][$n - 1 - $i];
    }
    
    return abs($primaryDiagonal - $secondaryDiagonal);
}


$rows = 5; // change this for more/less rows

for ($i = 1; $i <= $rows; $i++) {
    // print leading spaces
    for ($s = 1; $s <= $rows - $i; $s++) {
        echo " ";
    }
    // print numbers
    for ($n = 1; $n <= $i; $n++) {
        echo $n . " ";
    }
    echo "\n";
}
?>

?>