<?php
function insertNums(array $matrix): array
{
    $newMatrix = array();
    for ($i = 0, $iMax = count($matrix[$i]); $i < $iMax; $i++) {
        $min = 0;
        $negativePos = null;
        $column = array();
        for ($j = 0, $jMax = count($matrix); $j < $jMax; $j++) {
            $element = $matrix[$j][$i];
            if ($j == 0) {
                $min = $element;
            }
            if (!isset($negativePos)) {
                if ($element < 0) {
                    echo $element . "\n";
                    $negativePos = $j;
                }
            }
            if ($element < $min) {
                $min = $element;
            }
            $column[$j] = $element;

            if ($j == $jMax - 1) {
                for ($k = 0, $l = 0; $k < $jMax + 1; $k++) {
                    if ($k == 0 and !isset($negativePos)) {
                        $newMatrix[$k][$i] = $min;
                        continue;
                    }
                    if (isset($negativePos) and $k == $negativePos + 1) {
                        $newMatrix[$k][$i] = $min;
                        continue;
                    }
                    $newMatrix[$k][$i] = $column[$l];
                    $l++;
                }
            }
        }
    }
    return $newMatrix;
}

$matrix =
    [[2, -34, 7534, -323456],
        [0, -3, 8, -2],
        [3567, -456, 6, -381],
        [2, -7, -12, -67],
        [477, -2, 5, -1]];

var_dump(insertNums($matrix));