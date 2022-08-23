<?php
function multMatrix(array $array, array $vector): array
{
    $vSize = (sqrt(1 + 8 * count($array)) - 1) / 2;
    $matrix = array();
    $arrayIndex = 0;
    for ($i = 0; $i < $vSize; $i++) {
        $matrix[$i] = 0;
        for ($j = 0; $j < $vSize; $j++) {
            if ($j >= $i) {
                $matrix[$i] +=$array[$arrayIndex] * $vector[$j];
                $arrayIndex++;
            }
        }
    }
    return $matrix;
}

$array = [1, 4, 3, 6, 4, 7, 4, 6, 7, 4];
$vector = [2, 5, -1, 6];
var_dump(multMatrix($array, $vector));
