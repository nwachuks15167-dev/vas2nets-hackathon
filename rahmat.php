<?php

function printSpaces($number)
{
    for ($i = 0; $i < $number; $i++) {
        echo " ";
    }
}

function rahmatRow($length, $row)
{
    $hashterg = "#";
    $space = " ";

    if ($row < $length) {

        $number = $length - $row;
        $number_of_spaces = $row;

    } else {
        $number = $row - $length + 2;
        $number_of_spaces = $length - $number;
    }

    for ($blank = $number_of_spaces; $blank > 0; $blank--) {
        echo $space;
    }

    for ($x = $number; $x > 0; $x--) {
        echo $hashterg . $space;
    }

    $width = $number_of_spaces + ($number * 2);

    if ($width < 15) {
        printSpaces(15 - $width);
    }
}


// FINAL PYRAMID
function rahmatRow2($length, $iteration)
{
    $star = "*";
    $space = " ";
    
    $total_length = 2 * $length - 1;
    
    $first_left_element = $star;
    $second_left_element = $space;

    if ($iteration % 2 == 0) {
        $second_left_element = $star;
        $first_left_element = $space;
    }

    // LEFT SIDE
    for ($item_number = 1; $item_number <= $iteration; $item_number++) {
        echo ($item_number % 2 == 0) ? $second_left_element: $first_left_element;
    }

    // MIDDLE SPACE
    $number_of_middle_space = 
        $total_length - 2 * $iteration;

    if ($number_of_middle_space > 0) {

        for ($space_number = 1; $space_number <= $number_of_middle_space; $space_number++) {
            echo $space;
        }
    }

    // RIGHT SIDE
    if ($iteration == $length) {

        $remaining_grid = $length - 1;

        for ($grid_number = 1; $grid_number <= $remaining_grid; $grid_number++) {
            echo ($grid_number % 2 == 0) ? $star: $space;
        }

        $right_width = $remaining_grid;

    } else {

        for ($item_number = 1; $item_number <= $iteration; $item_number++) {
            echo ($item_number % 2 == 0) ? $space : $star;
        }

        $right_width = $iteration;
    }

    // CALCULATE WIDTH
    $width =
        $iteration
        + ($number_of_middle_space > 0
            ? $number_of_middle_space
            : 0)
        + $right_width;

    if ($width < 15) {
        printSpaces(15 - $width);
    }
}

$length = 5;

$total_rows = ($length * 2) - 1;

for ($row = 0; $row < $total_rows; $row++) {

    if ($row < $length) {

        $number = $row + 1;

    } else {

        $number = (2 * $length) - $row - 1;
    }

    rahmatRow2($length, $number);

    rahmatRow($length, $row);

    echo "\n";
}
?>