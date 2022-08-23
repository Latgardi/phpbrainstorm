<?php
function setElemsDesc(array $array): array
{
    $result = array();
    for ($i = 0, $iMax = count($array); $i < $iMax; $i++) {
        $result[$i] = max($array);
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

function insElement(array $matrix, $p): array
{
    $newMatrix = array();
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $matrix[$i] = setElemsDesc($matrix[$i]);
        for ($j = 0, $k = 0, $jMax = count($matrix[$i]) + 1; $j < $jMax; $j++, $k++) {
            if ($j == 0 and $matrix[$i][$k] < $p) {
                $newMatrix[$i][$j] = $p;
                $j++;
            }
            $newMatrix[$i][$j] = $matrix[$i][$k];
            if ($matrix[$i][$k] >= $p and isset($matrix[$i][$k + 1]) and $matrix[$i][$k + 1] <= $p) {
                $j++;
                $newMatrix[$i][$j] = $p;
            }
        }
    }
    return $newMatrix;
}

$matrix = [[4, 1, 0, 1],
    [0, -1, 1, -1],
    [3, 1, 0, 3],
    [-7, 0, 0, 6],
    [3, 2, 0, 3]];

var_dump(insElement($matrix, 2));