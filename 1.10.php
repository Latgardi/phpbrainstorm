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

function getSqrPalindromes(int $number)
{
    for ($i = $number; $i > 0; $i--)
    {
        if ($i == getReverse($i) and $i ** 2 == getReverse($i ** 2)) {
            echo $i . "\n";
        }
    }
}


getSqrPalindromes(100000);