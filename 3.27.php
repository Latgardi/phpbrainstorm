<?php
function getDescMap(array $array): array
{
    $map = array();
    for ($i = 0, $iMax = count($array); $i < $iMax; $i++) {
        $max = max($array);
        for ($j = 0, $jMax = $iMax; $j < $jMax; $j++) {
            if (isset($array[$j])) {
                if ($max == $array[$j]) {
                    $map[] = $j;
                    unset($array[$j]);
                    break;
                }
            }
        }
    }
    return $map;
}

function swapColumns(array $matrix): array
{
    $map = array();
    $newMatrix = array();
    for ($i = 0, $iMax = count($matrix[$i]); $i < $iMax; $i++) {
        $column = array();
        for ($j = 0, $jMax = count($matrix); $j < $jMax; $j++) {
            $column[] = $matrix[$j][$i];
        }
        $map[$i] = max($column);
    }
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        if ($i == 0) {
            $map = getDescMap($map);
        }
        for ($j = 0, $jMax = count($map); $j < $jMax; $j++) {
            $newMatrix[$i][] = $matrix[$i][$map[$j]];
        }
    }
    return $newMatrix;
}

$matrix =
    [[4, 1, 0, 1],
    [0, -1, 1, -1],
    [3, 1, 0, 3],
    [-7, 0, 0, 6],
    [3, 2, 0, 3]];

var_dump(swapColumns($matrix));
