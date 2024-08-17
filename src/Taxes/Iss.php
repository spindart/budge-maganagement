<?php

namespace Budge\DesignPatterns\Taxes;

use Budge\DesignPatterns\Budge;
// Concrete strategy
class Iss implements Taxes
{
    public function calculateTax(Budge $budge): float
    {
        return $budge->value * 0.06;
    }
}
