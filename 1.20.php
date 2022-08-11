<?php
function getDivisorsSum(int $number): int
{
    $divisorsSum = 0;
    for ($i = 1; $i < $number; $i++)
    {
        if ($number % $i == 0) {
            $divisorsSum += $i;
        }
    }
    return $divisorsSum;
}

function maxDivSum(int $n, int $m): int
{
    $number = 0;
    $sum = 0;
    for ($i = $n; $i <= $m; $i++) {
        $sumI = getDivisorsSum($i);
        if ($sumI > $sum) {
            $sum = $sumI;
            $number = $i;
        }
    }
    return $number;
}

echo maxDivSum(10, 2643);