<?php

interface Flight
{
    public function isBusiness(): bool;

    public function getMileage(): int;
}
