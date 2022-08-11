<?php
function isPrime(int $number): bool
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function primeDivisorsSum(int $number): int
{
    $divisorsSum = 0;
    for ($i = 1; $i < $number; $i++)
    {
        if ($number % $i == 0 and isPrime($i)) {
            $divisorsSum += $i;
        }
    }
    return $divisorsSum;
}

function maxPrimeDivisorsSum(int $m): int
{
    $maxSum = 0;
    $number = 0;
    for ($i = 1; $i <= $m; $i++) {
        $sum = primeDivisorsSum($i);
        if ($sum > $maxSum) {
            $maxSum = $sum;
            $number = $i;
        }
    }
    return $number;
}

echo maxPrimeDivisorsSum(2598);



