<?php

function nwachukwu($length){
    $hashterg = "#";
    $space = " ";
    $newline = "\n";
    $number_of_spaces = 0;
    $number_of_spaces2 = $length - 2;

        for($number = $length; $number > 0; $number--){

            for($blank = $number_of_spaces; $blank > 0; $blank--){
                echo $space;
            }

            for($x = $number; $x > 0; $x--){
                echo $hashterg. $space;
            }
             echo $newline;
            $number_of_spaces++;
        }

          for($number = 2; $number <= $length; $number++){

            for($blank = $number_of_spaces2; $blank > 0; $blank--){
                echo $space;
            }

            for($y = $number; $y > 0; $y--){
                echo $hashterg. $space;
            }
             echo $newline;
             $number_of_spaces2--;
        }

}

function nwachukwu2($length)
{
    $star = "*";
    $space = " ";
    $newline = "\n";
    //lets print the upper part
    for ($iteration = 1; $iteration <= $length; $iteration++) {
        $total_length = 2 * $length - 1;
        $first_left_element = $star;
        $second_left_element = $space;
        if ($iteration % 2 == 0) {
            $second_left_element = $star;
            $first_left_element = $space;
        }

        //this prints the left side on each line
        for ($item_number = 1; $item_number <= $iteration; $item_number++) {
            echo ($item_number % 2 == 0) ? $second_left_element : $first_left_element;
        }

        //now lets print the middle space
        $number_of_middle_space = $total_length - 2 * $iteration;
        for ($space_number = 1; $space_number <= $number_of_middle_space; $space_number++) {
            echo $space;
        }

        //now lets print the right side
        if($iteration == $length){
            $remaining_grid = $length - 1;
            for ($grid_number = 1; $grid_number <= $remaining_grid; $grid_number++){
                echo ($grid_number % 2 == 0) ? $star : $space;
            }
        }else{
            for ($item_number = 1; $item_number <= $iteration; $item_number++) {
                echo ($item_number % 2 == 0) ? $space : $star;
            }
        }

        echo $newline;

    }


    //lets print the down part
    for ($iteration = $length - 1; $iteration > 0; $iteration--){
        //lets print the left side
        $total_length = 2 * $length - 1;
        $first_left_element = $star;
        $second_left_element = $space;
        if ($iteration % 2 == 0) {
            $second_left_element = $star;
            $first_left_element = $space;
        }

        //this prints the left side on each line
        for ($item_number = 1; $item_number <= $iteration; $item_number++) {
            echo ($item_number % 2 == 0) ? $second_left_element : $first_left_element;
        }

        //now lets print the middle space
        $number_of_middle_space = $total_length - 2 * $iteration;
        for ($space_number = 1; $space_number <= $number_of_middle_space; $space_number++) {
            echo $space;
        }

        //now lets print the right side
        for ($item_number = 1; $item_number <= $iteration; $item_number++) {
            echo ($item_number % 2 == 0) ? $space : $star;
        }
        echo $newline;
    }
}

nwachukwu2($length = 5);

echo "\n";

nwachukwu($length = 5);

?>