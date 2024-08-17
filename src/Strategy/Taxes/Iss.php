<?php

namespace Budge\DesignPatterns\Strategy\Taxes;

use Budge\DesignPatterns\Budge;
use Budge\DesignPatterns\Strategy\Taxes\Interface\Taxes;

// Concrete strategy
class Iss implements Taxes
{
    public function calculateTax(Budge $budge): float
    {
        return $budge->value * 0.06;
    }
}
