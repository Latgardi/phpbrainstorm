<?php
function changeNumbers($array)
{
    for ($i = 0, $iMax = count($array); $i < $iMax; $i++) {
        $number = abs($array[$i]);
        $sum = 0;
        for (; $number > 0; $number = intdiv($number, 10)) {
            $sum += $number % 10;
        }
        $array[$i] = $sum;
    }
    return $array;
}

function checkMatrix($matrix)
{
    for ($i = 0, $iMax = count($matrix[$i]); $i < $iMax; $i++) {
        $column = array();
        for ($j = 0, $jMax = count($matrix); $j < $jMax; $j++) {
            if ($matrix[$j][$i] > 0) {
                continue 2;
            }
            $column[$j] = $matrix[$j][$i];
            if ($j == $jMax - 1 and $matrix[$j][$i] < 0) {
                $column = changeNumbers($column);
                for ($k = 0; $k < $jMax; $k++) {
                    $matrix[$k][$i] = $column[$k];
                }
            }
        }
    }
    return $matrix;
}

$matrix =
    [[2, -34, 7534, -323456],
        [0, -3, 8, -2],
        [3567, -456, 6, -381],
        [-2, -7, -12, -67],
        [477, -2, 5, -1]];

var_dump(checkMatrix($matrix));
