<?php
// Найти наименьшее общее кратное  (НОК)  двух натуральных чисел N и M.
function getGCD(int $n, int $m): int
{
    $greaterNum = max($n, $m);
    $smallerNum = min($n, $m);
    $modulo = $greaterNum % $smallerNum;
    if ($modulo == 0) {
        $gcd = $smallerNum;
    } else {
        $gcd = getGCD($smallerNum, $modulo);
    }
    return $gcd;
}

function getLCM(int $n, int $m): int
{
    return abs($n * $m) / getGCD($n, $m);
}

echo getLCM(56, 21);