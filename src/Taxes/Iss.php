<?php

namespace Budge\DesignPatterns\Taxes;

use Budge\DesignPatterns\Budge;

class Iss implements Taxes
{
    public function calculateTax(Budge $budge): float
    {
        return $budge->value * 0.06;
    }
}
