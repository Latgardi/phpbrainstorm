<?php
function getEqualSumOfNumbers($number)
{
    for ($i = 1000; $i <= 9999; $i++) {
        $current_number = $i;
        $sum = 0;
        while ($current_number > 0) {
            $sum += $current_number % 10;
            $current_number = intdiv($current_number, 10);
        }
        if ($sum == $number) {
            echo $i . "\n";
        }
    }
}

getEqualSumOfNumbers(23);