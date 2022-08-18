<?php
function checkNumber(int $number): bool
{
    for ($number = abs($number); $number > 0; $number = intdiv($number, 10)) {
        $lastNum = $number % 10;
        if ($lastNum != 0 and $lastNum != 1 and $lastNum != 3 and $lastNum != 8) {
            return false;
        }
    }
    return true;
}

function checkArray(array $matrix): int
{
    $sum = 0;
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        for ($j = 0, $jMax = count($matrix[$i]); $j < $jMax; $j++) {
            if (checkNumber($matrix[$i][$j])) {
                echo $matrix[$i][$j] . "\n";
                $sum += $matrix[$i][$j];
            }
        }
    }
    return $sum;
}

$matrix =
    [[2, 34, 7534, 323456],
        [0, 3, 8, 2],
        [3567, 456, 6, -381],
        [-2, -7, -12, -67],
        [477, 2, 5, 1]];

checkArray($matrix);