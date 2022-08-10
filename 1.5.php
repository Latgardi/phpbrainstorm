<?php
function reverseNumber(int $number): int
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

echo reverseNumber(12);