<?php

class Loyalty
{
    public function addPoints(Flight $flight)
    {
        if ($flight->isBusiness()) {
            return 2 * $flight->getMileage();
        }

        return $flight->getMileage();
    }
}
