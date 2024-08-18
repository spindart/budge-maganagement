<?php

namespace Invoice\DesignPatterns\Behavioral\TemplateMethod\Taxes\Interface;

use Invoice\DesignPatterns\Invoice;

// The strategy interface
interface TaxInterface
{
    public function calculateTax(Invoice $invoice): float;
}
