<?php
function findMax(array $array): int
{
    $max = max($array);
    $arraySize = count($array);
    $result = 0;
    for ($i = 0; $i < $arraySize; $i++) {
        if (!isset($array[$i])) {
            $arraySize++;
            continue;
        }
        if ($array[$i] == $max) {
            $result = $i;
        }
    }
    return $result;
}

function delEven(array $array): array
{
    for ($i = 0, $iMax = count($array); $i < $iMax; $i++) {
        $tmp = $array[$i];
        $max1 = findMax($tmp);
        unset($tmp[$max1]);
        $max2 = findMax($tmp);
        for ($j = min($max1, $max2) + 1; $j < max($max1, $max2); $j++) {
            if ($array[$i][$j] > 0 and $array[$i][$j] % 2 == 0) {
                unset($array[$i][$j]);
            }
        }
    }
    return $array;
}

$matrix =
    [[34, 30, 7534, -323456],
        [0, -3, 8, -2],
        [3567, -456, 6, 381],
        [2, -7, -12, -67],
        [477, 2, 4, 10]];

var_dump(delEven($matrix));