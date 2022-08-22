<?php
function findMax(array $matrix): array
{
    $maxElems = array();
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $once = array();
        for ($j = 0, $jMax = count($matrix[$j]); $j < $jMax; $j++) {
            for ($k = 0; $k < $jMax; $k++) {
                if ($k == $j) {
                    $k++;
                }
                if (!isset($matrix[$i][$k])) {
                    break;
                }
                if ($matrix[$i][$j] == $matrix[$i][$k]) {
                    continue 2;
                }
            }
            $once[] = $matrix[$i][$j];
        }
        $maxElems[$i] = max($once);

    }
    return $maxElems;
}

$matrix = [[4, 1, 0, 1],
    [0, -1, 1, -1],
    [3, 1, 0, 3],
    [-7, 0, 0, 6],
    [3, 2, 0, 3]];

var_dump(findMax($matrix));