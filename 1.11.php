<?php
function getNumbers($m)
{
    for ($i = 1; $i <= $m; $i++)
    {
        $sum = 0;
        $number = $i;
        while ($number > 0) {
            $lastNum = $number % 10;
            $number = intdiv($number, 10);
            $sum += $lastNum;
        }
        if ($i % $sum == 0) {
            echo $i . "\n";
        }
    }
}

getNumbers(346436);