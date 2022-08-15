<?php
function countDigits(int $number): int
{
    $numCounter = 0;
    for ($i = $number; $i > 0; $i = intdiv($i, 10)) {
        $numCounter++;
    }
    return $numCounter;
}

function isSum(int $number, int $sum): bool
{
    if (countDigits($number) <= 1) {
        return false;
    }
    $resultSum = 0;
    for ($i = $number; $i > 0; $i = intdiv($i, 10)) {
        $resultSum += ($i % 10);
    }
    return $resultSum == $sum;
}

function deleteNumber(int $number, int $del): int
{
    $result = 0;
    for($i = 1; $number != 0; $number = intdiv($number, 10)) {
        $tmp = $number % 10;
        if ($tmp != $del) {
            $result = $tmp * $i + $result;
            $i *= 10;
        }
    }
    return $result;
}

function checkSum(int $number, int $sum): bool
{
    $length = countDigits($number);
    if (isSum($number, $sum)) {
        return true;
    } else {
        for ($i = 1; $i <= $length; $i++) {
            $del = intdiv($number, 10 ** ($length - $i)) % 10;
            $res = deleteNumber($number, $del);
            if (checkSum($res, $sum)) {
                return true;
            }
        }
    }
    return false;
}

function ifMakeSumFromDigits(int $m, int $k): array
{
    $result = array();
    for ($i = 1; $i <= $m; $i++)
    {
        if (isSum($m, $k)) {
            $result[$i] = false;
        } else {
            $result[$i] = checkSum($i, $k);
        }
    }
    return $result;
}

var_dump(ifMakeSumFromDigits(58032, 6));







