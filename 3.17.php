<?php
function alterRow(array $matrix): array
{
    $newMatrix = array();
    $alternate = array();
    $max = 0;
    $sign = null;
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $alternate[$i] = 0;
        for ($j = 0, $jMax = count($matrix[$i]); $j < $jMax; $j++) {
            $element = $matrix[$i][$j];
            if ($element == 0) {
                continue;
            }
            if (isset($sign)) {
                if ($sign) {
                    if ($element > 0) {
                        continue;
                    }
                } else {
                    if ($element < 0) {
                        continue;
                    }
                }
                $alternate[$i]++;
            }
            $sign = $element > 0;
        }
        unset($sign);
    }
    for ($i = 0, $iMax = count($alternate); $i < $iMax; $i++) {
        if ($alternate[$i] == max($alternate)) {
            $max = $i;
        }
    }
    for ($i = 0, $j = -1, $iMax = count($matrix); $i < $iMax; $i++, $j++) {
        if ($i == 0) {
            $newMatrix[$i] = $matrix[$max];
            unset($matrix[$max]);
            continue;
        }
        if (!isset($matrix[$j])) {
            $j++;
        }
        $newMatrix[$i] = $matrix[$j];
    }
    return $newMatrix;
}

$matrix =
    [[4, 1, 0, 1],
        [-1, 0, 0, 6],
        [0, -1, 1, -1],
        [3, 1, 0, 3],
        [-7, 0, 0, 6]];

var_dump(alterRow($matrix));