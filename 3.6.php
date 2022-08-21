<?php
function multVector(array $matrix, array $vector): array
{
    $result = array();
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $result[$i] = 0;
        for ($j = 0, $jMax = count($matrix); $j < $jMax; $j++) {
           $result[$i] += $matrix[$i][$j] * $vector[$j];
        }
    }
    return $result;
}

function multMatrix(array $matrix): array
{
    $newMatrix = array();
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        for ($j = 0, $jMax = count($matrix); $j < $jMax; $j++) {
            if ($matrix[$i][$j] < 0) {
                continue 2;
            }
            if ($j == $jMax - 1 and $matrix[$i][$j] > 0) {
                $newMatrix = multVector($matrix, $matrix[$i]);
            }
        }
    }
    return $newMatrix;
}

$matrix =
    [[0, 1, -7, 3],
        [4, 3, 8, 2],
        [3, -4, 6, 3],
        [2, 7, 2, -7]];

var_dump(multMatrix($matrix));