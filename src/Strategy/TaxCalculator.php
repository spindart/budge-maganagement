<?php

namespace Budge\DesignPatterns\Strategy;

use Budge\DesignPatterns\Budge;
use Budge\DesignPatterns\Strategy\Taxes\Interface\Taxes;

class TaxCalculator
{
    public function calculateTaxBudge(Budge $budge, Taxes $taxes): float
    {
        return $taxes->calculateTax($budge);
    }
}
