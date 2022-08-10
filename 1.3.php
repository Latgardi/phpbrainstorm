<?php
function isAscSequence(int $number): bool
{
    while ($number > 0) {
        $lastNum = $number % 10;
        $number = intdiv($number, 10);
        if ($lastNum < ($number % 10)) {
            return false;
        }
    }
    return true;
}

var_dump(isAscSequence(12579));
