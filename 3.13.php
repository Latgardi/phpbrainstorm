<?php
function findColumns(array $matrix): array
{
    $min = $matrix[0][0];
    $max = $matrix[0][0];
    $minColumn = 0;
    $maxColumn = 0;
    for ($i = 0, $iMax = count($matrix[$i]); $i < $iMax; $i++) {
        for ($j = 0, $jMax = count($matrix); $j < $jMax; $j++) {
            $element = $matrix[$j][$i];
            if ($element < $min) {
                $min = $element;
                $minColumn = $i;
            }
            if ($element > $max) {
                $max = $element;
                $maxColumn = $i;
            }
        }
    }
    return array("min" => $minColumn, "max" => $maxColumn);
}

function swapColumns(array $matrix): array
{
    $columns = findColumns($matrix);
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $minColumnElem = $matrix[$i][$columns["min"]];
        $maxColumnElem = $matrix[$i][$columns["max"]];
        $matrix[$i][$columns["min"]] = $maxColumnElem;
        $matrix[$i][$columns["max"]] = $minColumnElem;
    }
    return $matrix;
}

$matrix =
    [[2, -34, 7534, -323456],
        [0, -3, 8, -2],
        [3567, -456, 6, -381],
        [2, -7, -12, -67],
        [477, -2, 5, -1]];

var_dump(swapColumns($matrix));