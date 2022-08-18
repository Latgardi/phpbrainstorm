<?php
function extremes($row)
{
    $asc = false;
    $desc = false;
    $last = count($row) - 1;
    $i = 0;
    if ($row[$i] < $row[$i + 1]) {
        while ($row[$i] < $row[$i + 1]) {
            $i++;
            if (!$row[$i+1]) {
                break;
            }
        }
        if ($i == $last) {
            $asc = true;
        }
    }
    else {
        while ($row[$i] > $row[$i + 1]) {
            $i++;
            if (!$row[$i+1]) {
                break;
            }
        }
        if ($i == $last) {
            $desc = true;
        }
    }

    if ($asc) {
        return array("min" => $row[0], "max" => $row[$last]);
    }
    if ($desc) {
        return array("min" => $row[$last], "max" => $row[0]);
    }
    return null;
}

function checkStrings($matrix): array
{
    $result = array();
    for ($i = 0, $iMax = count($matrix); $i < $iMax; $i++) {
        $numbers = extremes($matrix[$i]);
        if ($numbers) {
            $result[$i + 1] = $numbers;
        }
    }
    return $result;
}

$matrix =
    [[2, 34, 7534, 323456],
        [0, 3, 8, 2],
        [3567, 456, 6, 3],
        [-2, -7, -12, -67],
        [477, 2, 5, 1]];

var_dump(checkStrings($matrix));