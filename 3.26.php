<?php
function zeroRow(int $length): array
{
    $row = array();
    for ($i = 0; $i < $length; $i++) {
        $row[] = 0;
    }
    return $row;
}

function moveZeroStrings(array $matrix): array
{
    $newMatrix = array();
    $zeroStrings = 0;
    $rowVSize = count($matrix);
    $columnVSize = count($matrix[0]);
    for ($i = 0; $i < $rowVSize; $i++) {
        for ($j = 0; $j < $columnVSize; $j++) {
            if ($matrix[$i][$j] != 0) {
                continue 2;
            }
            if ($j == $columnVSize - 1) {
                $zeroStrings++;
                unset($matrix[$i]);
            }
        }
    }
    for ($i = 0; $i < $rowVSize; $i++) {
        if (isset($matrix[$i])) {
            $newMatrix[] = $matrix[$i];
        }
    }
    for ($i = 0; $i < $zeroStrings; $i++) {
        $newMatrix[] = zeroRow($columnVSize);
    }
    return $newMatrix;
}

$matrix =
    [[0, 1, 0, 1],
        [0, 0, 0, 0],
        [0, -1, 1, -1],
        [0, 1, 0, 0],
        [0, 0, 0, 0,]];

var_dump(moveZeroStrings($matrix));