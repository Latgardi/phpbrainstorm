<?php
function swapElems(array $matrix): array
{
    $newMatrix = array();
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        for ($j = 0, $jMax = count($matrix[$i]); $j < $jMax; $j++) {
            if ($matrix[$i][$j] == 0) {
                unset($matrix[$i][$j]);
            }
        }
        for ($j = 0; $j < $jMax; $j++) {
            if (!empty($matrix[$i])) {
                $max = max($matrix[$i]);
                $newMatrix[$i][] = $max;
                for ($k = 0; $k < $jMax; $k++) {
                    if (isset($matrix[$i][$k])) {
                        if ($matrix[$i][$k] == $max) {
                            unset($matrix[$i][$k]);
                            continue 2;
                        }
                    }
                }
            } else {
                $newMatrix[$i][] = 0;
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

var_dump(swapElems($matrix));