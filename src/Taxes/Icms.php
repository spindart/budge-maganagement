<?php

namespace Budge\DesignPatterns\Taxes;

use Budge\DesignPatterns\Budge;
// Concrete strategy
class Icms implements Taxes
{
    public function calculateTax(Budge $budge): float
    {
        return $budge->value * 0.1;
    }
}
