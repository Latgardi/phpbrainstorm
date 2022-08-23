<?php
function swapRows(array $matrix): array
{
    $newMatrix = array();
    $elements = array();
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $elements[$i] = 0;
        $positive = 0;
        $negative = 0;
        for ($j = 0, $jMax = count($matrix[$i]); $j < $jMax; $j++) {
            $element = $matrix[$i][$j];
            if ($element == 0) {
                continue;
            }
            if ($element > 0) {
                $positive++;
            } else {
                $negative++;
            }
        }
        if ($negative == 0) {
            $positive++;
            $elements[$i] = $positive;
            continue;
        }
        $elements[$i] = $positive / $negative;
    }
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $max = max($elements);
        for ($j = 0, $jMax = $iMax; $j < $jMax; $j++) {
            if (isset($elements[$j]) and $elements[$j] == $max) {
                $newMatrix[] = $matrix[$j];
                unset($elements[$j]);
                continue 2;
            }
        }
    }
    return $newMatrix;
}

$matrix = [[4, 1, 0, 1],
    [0, -1, 1, -1],
    [3, -1, -1, 3],
    [-7, 3, 0, 6],
    [3, 2, 6, 3]];

var_dump(swapRows($matrix));