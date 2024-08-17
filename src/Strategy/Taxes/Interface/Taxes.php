<?php

namespace Budge\DesignPatterns\Strategy\Taxes\Interface;

use Budge\DesignPatterns\Budge;

// The strategy interface
interface Taxes
{
    public function calculateTax(Budge $budge): float;
}
