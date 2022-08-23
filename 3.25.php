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

function swapStrings(array $matrix): array
{
    $newMatrix = array();
    $primeElems = array();
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $primeElems[$i] = 0;
        for ($j = 0, $jMax = count($matrix[$i]); $j < $jMax; $j++) {
            if (isPrime($matrix[$i][$j])) {
                $primeElems[$i]++;
            }
        }
    }
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $max = max($primeElems);
        for ($j = 0, $jMax = $iMax; $j < $jMax; $j++) {
            if (isset($primeElems[$j]) and $primeElems[$j] == $max) {
                $newMatrix[] = $matrix[$j];
                unset($primeElems[$j]);
                continue 2;
            }
        }
    }
    return $newMatrix;
}

$matrix = [[4, 1, 0, 1],
    [0, -1, 1, -1],
    [3, 7, 11, 3],
    [-7, 3, 0, 6],
    [3, 2, 6, 3]];

var_dump(swapStrings($matrix));