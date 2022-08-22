<?php
$matrix =
        [[0, 1, 0, 1],
        [0, 0, 0, 0],
        [0, -1, 1, -1],
        [0, 1, 0, 0],
        [0, 0, 0, 0,]];

function delZeroStrings($matrix) {
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        for ($j = 0, $jMax = count($matrix[$i]); $j < $jMax; $j++) {
            if ($matrix[$i][$j] != 0) {
                continue 2;
            }
            if ($j == $jMax - 1) {
                unset($matrix[$i]);
            }
        }
    }
    return $matrix;
}

var_dump(delZeroStrings($matrix));