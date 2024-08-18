<?php

namespace Invoice\DesignPatterns\Behavioral\TemplateMethod\Taxes;

use Invoice\DesignPatterns\Behavioral\TemplateMethod\Taxes\Abstracts\AbstractTaxWithTwoRates;
use Invoice\DesignPatterns\Invoice;

// Concrete strategy
class Irpj extends AbstractTaxWithTwoRates
{
    protected function shouldApplyTheMaximumRate(Invoice $invoice): bool
    {
        return $invoice->amount > 500;
    }

    protected function calculateMaxTax(Invoice $invoice): float
    {
        return $invoice->amount * 0.03;
    }

    protected function calculateMinTax(Invoice $invoice): float
    {
        return $invoice->amount * 0.02;
    }
}
