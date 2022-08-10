<?php
// Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N
function getNumsInNaturalNumber(int $number)
{
    $numbersLessFiveQuantity = 0;
    while ($number > 0) {
        $lessNumber = $number / 10;
        $last_number = intval(($lessNumber - intval($lessNumber)) * 10);
        if ($last_number < 5) {
            $numbersLessFiveQuantity++;
        }
        $number = intval($lessNumber);
    }
    return $numbersLessFiveQuantity;
}

echo getNumsInNaturalNumber(5340982);