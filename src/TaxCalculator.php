<?php

namespace Budge\DesignPatterns;

use Budge\DesignPatterns\Budge;

class TaxCalculator
{
    public function calculateTaxBudge(Budge $budge, string $taxName): float
    {
        switch ($taxName) {
            case 'ICMS':
                return $budge->value * 0.1;
            case 'ISS':
                return $budge->value * 0.06;
        }
        return $budge->value;
    }
}
