<?php
function setElemsAsc(array $array): array
{
    $result = array();
    for ($i = 0, $iMax = count($array); $i < $iMax; $i++) {
        $result[$i] = min($array);
        for ($j = 0, $jMax = $iMax; $j < $jMax; $j++) {
            if (isset($array[$j])) {
                if ($result[$i] == $array[$j]) {
                    unset($array[$j]);
                    break;
                }
            }
        }
    }
    return $result;
}

$matrix =
    [[4, 1, 0, 2],
        [0, -1, 6, 8],
        [3, 1, 0, 3],
        [-8, 0, 0, 6],
        [3, -2, 0, 3]];

function swapElements(array $matrix, int $p): array
{
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $multiple = array();
        $notMultiple = array();
        for ($j = 0, $jMax = count($matrix[$i]); $j < $jMax; $j++) {
            $element = $matrix[$i][$j];
            if ($element % $p == 0) {
                $multiple[] = $element;
            } else {
                $notMultiple[] = $element;
            }
        }
        $matrix[$i] = setElemsAsc($multiple);
        for ($j = 0, $jMax = count($notMultiple); $j < $jMax; $j++) {
            $matrix[$i][] = $notMultiple[$j];
        }
    }
    return $matrix;
}

var_dump(swapElements($matrix, 2));