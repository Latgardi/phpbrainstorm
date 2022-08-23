<?php
function sortKeys(array $array): array
{
    $result = array();
    for ($i = 0, $iMax = count($array); $i < $iMax; $i++) {
        $result[] = $array[$i];
    }
    return $result;
}

function negDiagonal(array $matrix): array
{
    $map = array();
    $newMatrix = array();
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        for ($j = 0; $j < $iMax; $j++) {
            if ($matrix[$i][$j] < 0) {
                $map[$i] = $j;
                continue 2;
            }
        }
    }
    var_dump($map);
    for ($i = 0, $iMax = count($map); $i < $iMax; $i++) {
        echo $map[$i];
        $newMatrix[$map[$i]] = $matrix[$i];
    }
    return sortKeys($newMatrix);
}

$matrix =
    [[0, -1, 2, 0],
        [-2, 0, 0, 2],
        [0, 0, -1, 4],
        [0, 0, 0, -1]];

var_dump(negDiagonal($matrix));