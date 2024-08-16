<?php

namespace Budge\DesignPatterns;

use Budge\DesignPatterns\Budge;
use Budge\DesignPatterns\Taxes\Taxes;

class TaxCalculator
{
    public function calculateTaxBudge(Budge $budge, Taxes $taxes): float
    {
        return $taxes->calculateTax($budge);
    }
}
