<?php

class RomanNumber
{
    /**
     * @param int $number
     * @return null|string
     */
    public function convert(int $number)
    {
        $map = [
            9 => 'IX',
            5 => 'V',
            4 => 'IV',
            1 => 'I',
        ];
        $romanNumber = '';

        while ($number > 0) {
            foreach ($map as $int => $roman) {
                if($number >= $int) {
                    $number -= $int;
                    $romanNumber .= $roman;
                    break;
                }
            }
        }

        return $romanNumber;
    }
}
