<?php

function getPrimeFactors(int $number)
{
    for ($i = 2; $i <= $number; $i++) {
        if ($number % $i == 0) {
            echo "{$i}\n";
            getPrimeFactors($number / $i);
            break;
        }
    }
}

getPrimeFactors(1224356);