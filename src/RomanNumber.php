<?php

class RomanNumber
{
    /** @var array $map */
    private $map  = [
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    /**
     * @param int $number
     * @return null|string
     */
    public function convert(int $number)
    {
        $romanNumber = '';
        while ($number > 0) {
            foreach ($this->map as $int => $roman) {
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
