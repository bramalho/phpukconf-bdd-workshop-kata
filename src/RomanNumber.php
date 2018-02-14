<?php

class RomanNumber
{
    /**
     * @param int $number
     * @return null|string
     */
    public function convert(int $number)
    {
        if ($number === 1) {
            return 'I';
        }

        return null;
    }
}
