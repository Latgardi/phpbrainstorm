<?php
$matrix =
    [[2, 34, 7534, 323456],
        [2, 4, 8, 1],
        [3567, 456, 6, -381],
        [-2, -8, -12, -67],
        [477, 2, 5, 1]];

function swapElems($matrix)
{
    $min = 0;
    $max = 0;
    $minPos = 0;
    $maxPos = 0;
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        for ($j = 0, $jMax = count($matrix[$i]); $j < $jMax; $j++) {
            $element = $matrix[$i][$j];
            if ($j == 0) {
                $min = $element;
                $max = $element;
                $minPos = 0;
                $maxPos = 0;
            }
            if ($element < $min) {
                $min = $element;
                $minPos = $j;
                }
            if ($element > $max) {
                $max = $element;
                $maxPos = $j;
            }
            if ($j == $jMax - 1) {
                $matrix[$i][$maxPos] = $min;
                $matrix[$i][$minPos] = $max;
            }
        }
    }
    return $matrix;
}

var_dump(swapElems($matrix));