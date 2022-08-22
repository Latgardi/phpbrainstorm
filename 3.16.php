<?php
function insertColumn(array $matrix, array $column): array
{
    $trgColumn = count($matrix[0]);
    $newMatrix = array();
    for ($i = 0, $iMax = count($matrix[$i]); $i < $iMax; $i++) {
        for ($j = 0, $jMax = count($matrix); $j < $jMax; $j++) {
            if ($matrix[$j][$i] == 0) {
                $trgColumn = $i;
                continue 2;
            }
        }
    }
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        for ($j = 0, $k = 0, $jMax = count($matrix[$i]) + 1; $j < $jMax; $j++, $k++) {
            if ($j == $trgColumn) {
                $newMatrix[$i][$j] = $column[$i];
                $k--;
                continue;
            }
            $newMatrix[$i][$j] = $matrix[$i][$k];
        }
    }
    return $newMatrix;
}

$matrix =
    [[0, 1, 0, 1],
        [0, 0, 0, 6],
        [0, -1, 1, -1],
        [0, 1, 0, 3],
        [0, 0, 0, 6]];

$column = [0, 3, 5, 3, 6];

var_dump(insertColumn($matrix, $column));
