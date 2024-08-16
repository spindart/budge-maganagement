<?php

namespace Budge\DesignPatterns;

class Budge
{
    public float $value;

    public function __construct(float $value)
    {
        $this->value = $value;
    }


    public function getValue(): float
    {
        return $this->value;
    }
}
