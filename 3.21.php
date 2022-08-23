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

function setAsc(array $matrix): array
{
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $matrix[$i] = setElemsAsc($matrix[$i]);
    }
    return $matrix;
}

$matrix = [[4, 1, 0, 1],
    [0, -1, 1, -1],
    [3, 1, 0, 3],
    [-7, 0, 0, 6],
    [3, 2, 0, 3]];

var_dump(setAsc($matrix));