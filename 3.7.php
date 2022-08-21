<?php
//   массиве  А(N,N)  поменять  местами  максимальные  элементы  нижнего и верхнего треугольников относительно главной диагонали.

$matrix =
        [[0, 1, -7, 3],
        [4, 3, 8, 2],
        [3, -4, 6, 3],
        [2, 7, 2, -7]];

function swapMax(array $matrix): array
{
    $maxLower = 0;
    $maxLowerCoords = array();
    $maxGreater = 0;
    $maxGreaterCoords = array();
    for ($i = 1, $iMax = count($matrix);
         $i < $iMax;
         $i++) {
        for ($j = 0; $j < $i; $j++) {
            if ($matrix[$i][$j] > $maxLower) {
                $maxLower = $matrix[$i][$j];
                $maxLowerCoords = [$i, $j];
            }
            $greaterUnit = $matrix[($iMax - 1) - $i][($iMax - 1) - $j];
            if ($greaterUnit > $maxGreater) {
                $maxGreater = $greaterUnit;
                $maxGreaterCoords = [($iMax - 1) - $i, ($iMax - 1) - $j];
            }
        }
    }
    $matrix[$maxLowerCoords[0]][$maxLowerCoords[1]] = $maxGreater;
    $matrix[$maxGreaterCoords[0]][$maxGreaterCoords[1]] = $maxLower;
    return $matrix;
}

var_dump(swapMax($matrix));