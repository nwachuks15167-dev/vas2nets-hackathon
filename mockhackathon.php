
<?php
echo "<pre>";
function vertical ($n, $i){
    echo str_repeat(' ', $n-$i). implode(' ',array_fill(0, $i, '*' )) . "\n";
}

function upward($n){
    for($i = $n; $i >= 1; $i--){
        vertical ($n, $i);
    }
}

function downward($n){
    for($i = 1; $i <= $n; $i++){
        vertical ($n, $i);
    }
}


function horizontal($n, $i){
    echo str_repeat('*', $i) . "\n";
}

function leftway($n) {
    for($i = $n; $i >= 1; $i--){
        echo str_repeat('*', $i) . "\n";
    }
}

function rightway($n) {
    for($i = 2; $i <= $n; $i++){
        echo str_repeat('*', $i) . "\n";
    }
}



$n = 5;
upward($n);
downward($n);
echo "<br><br><br>";
leftway($n);
rightway($n);
echo "</pre>";




