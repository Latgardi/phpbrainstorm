<?php
function areEqualNumbers(int $number): bool
{
    for ($number; $number > 0; $number = intdiv($number, 10)) {
        $lastNum = $number % 10;
        if ($lastNum == intdiv($number % 100, 10)) {
            return true;
        }
    }
    return false;
}

var_dump(areEqualNumbers(114567));