<?php
function minOdd(array $matrix): array
{
    $newMatrix = array();
    $trgColumn = 0;
    $minOddElems = 0;
    for ($i = 0, $iMax = count($matrix[$i]); $i < $iMax; $i++) {
        $oddElems = 0;
        for ($j = 0, $jMax = count($matrix); $j < $jMax; $j++) {
            $element = $matrix[$j][$i];
            if ($element == 0) {
                continue;
            }
            if ($element % 2 != 0) {
                $oddElems ++;
            }
        }
        if ($i == 0 or $oddElems < $minOddElems) {
            $minOddElems = $oddElems;
            $trgColumn = $i;
        }
    }
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        for ($j = 0, $k = 0, $jMax = count($matrix[$i]); $j < $jMax; $j++, $k++) {
            if ($k == $trgColumn) {
                $last = $matrix[$i][$k];
                $k++;
            }
            if ($k == $jMax) {
                $newMatrix[$i][$j] = $last;
                continue;
            }
            $newMatrix[$i][$j] = $matrix[$i][$k];
        }
    }
    return $newMatrix;
}

$matrix =
    [[4, 1, 0, 1],
        [2, 0, 0, 6],
        [0, -1, 1, -1],
        [3, 1, 0, 3],
        [-7, 0, 0, 6]];

var_dump(minOdd($matrix));