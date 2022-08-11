<?php
function getDivisorsSum(int $number): int
{
    $divisorsSum = 0;
    for ($i = 1; $i <= $number; $i++)
    {
        if ($number % $i == 0) {
            $divisorsSum += $i;
        }
    }
    return $divisorsSum;
}

function maxDivisorsSum(int $m): int
{
    $maxSum = 0;
    $number = 0;
    for ($i = 1; $i <= $m; $i++) {
        $sum = getDivisorsSum($i);
        if ($sum > $maxSum) {
            $maxSum = $sum;
            $number = $i;
        }
    }
    return $number;
}

echo maxDivisorsSum(12842);