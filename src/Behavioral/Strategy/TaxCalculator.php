<?php

namespace Invoice\DesignPatterns\Behavioral\Strategy;

use Invoice\DesignPatterns\Behavioral\Strategy\Taxes\Interface\TaxInterface;
use Invoice\DesignPatterns\Invoice;

class TaxCalculator
{
    private $strategy;
    public function __construct(TaxInterface $strategy)
    {
        $this->strategy = $strategy;
    }
    public function calculateTaxInvoice(Invoice $invoice): float
    {
        return $this->strategy->calculateTax($invoice);
    }
}
