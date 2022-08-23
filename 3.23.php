<?php
function swapRows(array $matrix): array
{
    $newMatrix = array();
    $posElems = array();
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $posElems[$i] = 0;
        for ($j = 0, $jMax = count($matrix[$i]); $j < $jMax; $j++) {
            if ($matrix[$i][$j] > 0) {
                $posElems[$i]++;
            }
        }
    }
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $max = max($posElems);
        for ($j = 0, $jMax = $iMax; $j < $jMax; $j++) {
            if (isset($posElems[$j]) and $posElems[$j] == $max) {
                $newMatrix[] = $matrix[$j];
                unset($posElems[$j]);
                continue 2;
            }
        }
    }
    return $newMatrix;
}

$matrix = [[4, 1, 0, 1],
    [0, -1, 1, -1],
    [3, 0, 0, 3],
    [-7, 3, 0, 6],
    [3, 2, 6, 3]];

var_dump(swapRows($matrix));