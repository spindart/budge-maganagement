<?php

namespace Budge\DesignPatterns\Taxes;

use Budge\DesignPatterns\Budge;

interface Taxes
{
    public function calculateTax(Budge $budge): float;
}
