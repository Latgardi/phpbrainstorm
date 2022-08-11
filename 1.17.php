<?php
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

echo getGCD(3965016, 3568);