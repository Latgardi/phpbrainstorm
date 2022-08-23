<?php
function getAscMap(array $array): array
{
    $map = array();
    for ($i = 0, $iMax = count($array); $i < $iMax; $i++) {
        $min = min($array);
        for ($j = 0, $jMax = $iMax; $j < $jMax; $j++) {
            if (isset($array[$j])) {
                if ($min == $array[$j]) {
                    $map[] = $j;
                    unset($array[$j]);
                    break;
                }
            }
        }
    }
    return $map;
}

function swapRows(array $matrix): array
{
    $newMatrix = array();
    $maxSum = 0;
    $maxSumRow = 0;
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $sum = 0;
        for ($j = 0, $jMax = count($matrix[$i]); $j < $jMax; $j++) {
            $sum += $matrix[$i][$j];
        }
        if ($i == 0 or $sum > $maxSum) {
            $maxSum = $sum;
            $maxSumRow = $i;
        }
    }
    $tmp = $matrix[0];
    $matrix[0] = $matrix[$maxSumRow];
    $matrix[$maxSumRow] = $tmp;
    $map = array();
    for ($i = 1, $iMax = count($matrix); $i < $iMax; $i++) {
        $map[] = $matrix[$i][0];
    }
    $map = getAscMap($map);
    $newMatrix[0] = $matrix[0];
    for ($i = 1, $iMax = count($matrix); $i < $iMax; $i++) {
        $newMatrix[$i] = $matrix[$map[$i - 1] + 1];
    }
    return $newMatrix;
}

$matrix = [[4, 1, 0, 1],
    [0, -1, 1, -1],
    [3, 1, 0, 3],
    [-7, 0, 0, 6],
    [3, 2, 0, 3]];

var_dump(swapRows($matrix));