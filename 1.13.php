<?php
function getReverse(int $number): int
{
    $result = 0;

    while ($number > 0) {
        $lastNum = $number % 10;
        $number = intdiv($number, 10);
        $result += $lastNum;
        if ($number > 0) {
            $result *= 10;
        }
    }
    return $result;
}

function isEvenSymmetrical(int $number): bool
{
    $digits = 0;
    for ($i = $number; $i > 0; $i = intdiv($i, 10)) {
        $digits++;
    }
    if ($digits % 2 != 0) {
        return false;
    }
    $first = intdiv($number, 10 ** ($digits / 2));
    $second = $number % 10 ** ($digits / 2);
    return $first == getReverse($second);
}

var_dump(isEvenSymmetrical(124421));


