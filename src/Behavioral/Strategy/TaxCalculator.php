<?php

namespace Invoice\DesignPatterns\Behavioral\Strategy;

use Invoice\DesignPatterns\Behavioral\Strategy\Taxes\Interface\TaxInterface;
use Invoice\DesignPatterns\Invoice;

class TaxCalculator
{
    public function calculateTaxInvoice(Invoice $invoice, TaxInterface $taxes): float
    {
        return $taxes->calculateTax($invoice);
    }
}
