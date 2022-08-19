<?php
function divisibleSum(array $column, int $p)
{
    $sum = 0;
    for ($i = 0, $iMax = count($column); $i < $iMax; $i++) {
        if ($column[$i] % $p != 0) {
            return null;
        } else {
            $sum += $column[$i];
        }
    }
    return $sum;
}

function checkColumns(array $matrix, int $p)
{
    $column = array();
    $result = array();
    for ($i = 0, $iMax = count($matrix[$i]); $i < $iMax; $i++) {
        for ($j = 0, $jMax = count($matrix); $j < $jMax; $j++) {
            $column[] = $matrix[$j][$i];
        }
        $sum = divisibleSum($column, $p);
        if ($sum) {
            $result[$i] = $sum;
        }
        $column = array();
    }
    return $result;
}

$matrix =
    [[2, 34, 7534, 323456],
        [2, 4, 8, 2],
        [3567, 456, 6, -381],
        [-2, -8, -12, -67],
        [477, 2, 5, 1]];

var_dump(checkColumns($matrix, 2));


