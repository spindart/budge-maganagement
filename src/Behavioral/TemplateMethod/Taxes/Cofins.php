<?php

namespace Invoice\DesignPatterns\Behavioral\TemplateMethod\Taxes;

use Invoice\DesignPatterns\Behavioral\TemplateMethod\Taxes\Abstracts\AbstractTaxWithTwoRates;
use Invoice\DesignPatterns\Invoice;
use Invoice\DesignPatterns\Behavioral\TemplateMethod\Taxes\Interface\TaxInterface;

// Concrete strategy
class Cofins extends AbstractTaxWithTwoRates
{
    protected function shouldApplyTheMaximumRate(Invoice $invoice): bool
    {
        return $invoice->amount > 300 && $invoice->quantityItems > 3;
    }

    protected function calculateMaxTax(Invoice $invoice): float
    {
        return $invoice->amount * 0.03;
    }

    protected function calculateMinTax(Invoice $invoice): float
    {
        return $invoice->amount * 0.025;
    }
}
