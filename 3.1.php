<?php
function trace(array $matrix): int
{
    $result = 0;
    for ($i = 0, $iMax = count($matrix);
         $i < $iMax;
         $i++) {
        $result += $matrix[$i][$i];
    }
    return $result;
}

function sums(array $matrix): array
{
    $lowerSum = 0;
    $upperSum = 0;
    for ($i = 1, $iMax = count($matrix);
         $i < $iMax;
         $i++) {
        for ($j = 0; $j < $i; $j++) {
            $lowerSum += $matrix[$i][$j];
            $upperSum += $matrix[($iMax - 1) - $i][($iMax - 1) - $j];
        }
    }
    return array("lower_sum" => $lowerSum, "upper_sum" => $upperSum);
}

$matrix =
        [[0, 1, 7, 3],
        [4, 3, 8, 2],
        [3, 4, 6, 3],
        [2, 7, 2, 7]];

echo trace($matrix) . "\n";
var_dump(sums($matrix));