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
            'V'     => 5,
            'IV'    => 4,
            'I'     => 1,
        ];
        $romanNumber = '';

        while ($number > 0) {
            foreach ($map as $roman => $int) {
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
