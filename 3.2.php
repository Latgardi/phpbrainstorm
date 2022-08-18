<?php
function lessAverage(array $matrix): int
{
    $less = 0;
    $av = 0;
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $sum = 0;
        $columns = count($matrix[$i]);
        for ($j = 0; $j < $columns; $j++) {
            if ($matrix[$i][$j] > 0) {
                $sum += $matrix[$i][$j];
            }
        }
        $currentAv = $sum / $columns;
        if ($currentAv < $av or $i == 0) {
            $av = $currentAv;
            $less = $i;
        }
    }
    return $less;
}

$matrix =
        [[9, 1, -7, 3],
        [-4, 3, -8, 2],
        [3, 4, 6, 3],
        [2, -7, 2, 7],
        [4, 2, 5, -1]];

echo lessAverage($matrix);