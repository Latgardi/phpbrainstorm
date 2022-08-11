<?php
function factorial(int $number): int
{
    if ($number == 0) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

function getFactorionSum(int $m): array
{
    $resultSum = 0;
    $quantity = 0;
    for ($i = 1; $i <= $m; $i++) {
        $sum = 0;
        for ($j = $i; $j > 0; $j = intdiv($j, 10)) {
            $lastNum = $j % 10;
            $sum += factorial($lastNum);
        }
        if ($i == $sum) {
            $quantity++;
            $resultSum += $i;
        }
    }
    return array("sum" => $resultSum, "quantity" => $quantity);
}

print_r(getFactorionSum(100000));
