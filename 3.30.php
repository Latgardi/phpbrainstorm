<?php
//  В  массиве  А(N,M)  расположить  строки  по  убыванию  значений  максимальных элементов строк.

function getDescMap(array $array): array
{
    $map = array();
    for ($i = 0, $iMax = count($array); $i < $iMax; $i++) {
        $max = max($array);
        for ($j = 0, $jMax = $iMax; $j < $jMax; $j++) {
            if (isset($array[$j])) {
                if ($max == $array[$j]) {
                    $map[] = $j;
                    unset($array[$j]);
                    break;
                }
            }
        }
    }
    return $map;
}

function swapRows(array $matrix): array
{
    $map = array();
    $newMatrix = array();
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $map[$i] = max($matrix[$i]);
    }
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        if ($i == 0) {
            $map = getDescMap($map);
        }
        $newMatrix[$i] = $matrix[$map[$i]];

    }
    return $newMatrix;
}

$matrix =
    [[4, 1, 0, 1],
        [0, -1, 1, -1],
        [3, 1, 0, 3],
        [-7, 0, 0, 6],
        [3, 2, 0, 3]];

var_dump(swapRows($matrix));
