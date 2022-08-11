<?php
function toBin(int $number): string
{
    $result = "";
    while ($number > 0) {
        $result = $number % 2 . $result;
        $number = intdiv($number, 2);
    }
    return $result;
}

/* рассматривал также вариант записи алфавита системы в строку и вызова по индексу, но подумал,
   что это не подходит под условие */
function toHex(int $number): string
{
    $result = "";
    while ($number > 0) {
        $unit = $number % 16;
        if ($unit == 10) {
            $unit = 'A';
        } elseif ($unit == 11) {
            $unit = 'B';
        } elseif ($unit == 12) {
            $unit = 'C';
        } elseif ($unit == 13) {
            $unit = 'D';
        } elseif ($unit == 14) {
            $unit = 'E';
        } elseif ($unit == 15) {
            $unit = 'F';
        }
        $result = $unit . $result;
        $number = intdiv($number, 16);
    }
    return $result;
}

echo toBin(124986) . "\n";
echo toHex(65000);