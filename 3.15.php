<?php
function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function delPrime(array $matrix): array
{
    for ($i = 0, $iMax = count($matrix[$i]); $i < $iMax; $i++) {
        for ($j = 0, $jMax = count($matrix); $j < $jMax; $j++) {
            if (!isPrime($matrix[$j][$i])) {
                continue 2;
            }
            if ($j == $jMax - 1) {
                for ($k = 0; $k < $jMax; $k++) {
                    unset($matrix[$k][$i]);
                }
            }
        }
    }
    return $matrix;
}

$matrix =
    [[0, 1, 7, 1],
        [0, 0, 2, 0],
        [0, -1, 5, -1],
        [0, 1, 3, 0],
        [0, 0, 7, 0,]];

var_dump(delPrime($matrix));