<?php
function isAutomorphic(int $number) :bool
{
    $numCounter = 0;
    for ($i = $number; $i > 0; $i = intdiv($i, 10)) {
        $numCounter++;
    }
    return (($number ** 2 - $number) % 10 ** $numCounter) == 0;
}

var_dump(isAutomorphic(1));