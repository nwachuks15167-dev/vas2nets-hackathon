 <?php

 function plusMinus($arr)
{
    $positive = 0;
    $negative = 0;
    $zero = 0;

    for ($i = 0; $i < count($arr); $i++)
    {
        if ($arr[$i] > 0)
        {
            $positive++;
        }
        elseif ($arr[$i] < 0)
        {
            $negative++;
        }
        else
        {
            $zero++;
        }
    }

    echo number_format($positive / count($arr), 6) . "\n";
    echo number_format($negative / count($arr), 6) . "\n";
    echo number_format($zero / count($arr), 6) . "\n";
}

 ?>
