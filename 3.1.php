<?php
function trace($matrix) {
    $result = 0;
    for ($i = 0, $iMax = count($matrix);
         $i < $iMax;
         $i++) {
        $result += $matrix[$i][$i];
    }
    return $result;
}

function lowerSum($matrix) {
    $result = 0;
    for ($i = 1, $iMax = count($matrix);
         $i < $iMax;
         $i++) {
        for ($k = 0; $k < $i; $k++) {
            $result += $matrix[$i][$k];
        }
    }
    return $result;
}

function upperSum($matrix) {
    $result = 0;
    for ($i = 0, $j = 1, $iMax = count($matrix);
         $i < $iMax;
         $i++, $j++) {
        for ($k = $j, $kMax = count($matrix[$i]); $k < $kMax; $k++) {
            $result += $matrix[$i][$k];
        }
    }
    return $result;
}

$matrix = [[0, 1, 7, 3],
    [4, 3, 8, 2],
    [3, 4, 6, 3],
    [2, 7, 2, 7]];

echo trace($matrix) . "\n";
echo lowerSum($matrix) . "\n";
echo upperSum($matrix) . "\n";