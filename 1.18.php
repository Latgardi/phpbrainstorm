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

function getAmicableNums(int $n, int $m)
{
    for ($i = $n; $i <= $m; $i++) {
        $firstSum = getDivisorsSum($i);
        $secondSum = getDivisorsSum($firstSum);
        if ($i == $secondSum and $i < $firstSum) {
            echo "({$i}, {$firstSum})\n";
        }
    }
}

getAmicableNums(2, 10000);