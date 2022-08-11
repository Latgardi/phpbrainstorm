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

function areCoprime(int $n, int $m): bool
{
    return getGCD($n, $m) == 1;
}

var_dump(areCoprime(8, 15));