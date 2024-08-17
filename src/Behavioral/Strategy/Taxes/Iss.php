<?php

namespace Invoice\DesignPatterns\Behavioral\Strategy\Taxes;

use Invoice\DesignPatterns\Invoice;
use Invoice\DesignPatterns\Behavioral\Strategy\Taxes\Interface\TaxInterface;

// Concrete strategy
class Iss implements TaxInterface
{
    public function calculateTax(Invoice $invoice): float
    {
        return $invoice->amount * 0.06;
    }
}
