<?php
function deleteMax(array $matrix): array
{
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $max = 0;
        $maxPos = 0;
        for ($j = 0, $jMax = count($matrix[$i]); $j < $jMax; $j++) {
            if ($j == 0) {
                $max = $matrix[$i][$j];
                continue;
            }
            if ($matrix[$i][$j] > $max) {
                $max = $matrix[$i][$j];
                $maxPos = $j;
            }
            if ($j == $jMax - 1) {
                unset($matrix[$i][$maxPos]);
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


var_dump(deleteMax($matrix));