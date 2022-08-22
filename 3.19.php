<?php
function swapSquares($matrix) {
    for ($i = 0, $iMax = count($matrix) / 2; $i < $iMax; $i++) {
        for ($j = 0; $j < $iMax; $j++) {
            $tmp1 = $matrix[$iMax + $i][$iMax + $j];
            $tmp2 = $matrix[$i][$iMax + $j];
            $matrix[$iMax + $i][$iMax + $j] = $matrix[$i][$j];
            $matrix[$i][$iMax + $j] = $matrix[$iMax + $i][$j];
            $matrix[$i][$j] = $tmp1;
            $matrix[$iMax + $i][$j] = $tmp2;
        }
    }
    return $matrix;
}

$matrix =
    [[4, 1, 0, 1],
        [0, -1, 1, -1],
        [3, 1, 0, 3],
        [-7, 0, 0, 6]];

var_dump(swapSquares($matrix));