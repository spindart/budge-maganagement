<?php

namespace Invoice\DesignPatterns\Behavioral\Strategy;

use Invoice\DesignPatterns\Invoice;

class TaxCalculatorWithLambda
{
    public function calculateTaxInvoice(Invoice $invoice, callable $taxStrategy): float
    {
        return $taxStrategy($invoice);
    }
}
