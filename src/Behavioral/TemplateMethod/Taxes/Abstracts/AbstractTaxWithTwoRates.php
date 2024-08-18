<?php

namespace Invoice\DesignPatterns\Behavioral\TemplateMethod\Taxes\Abstracts;

use Invoice\DesignPatterns\Behavioral\TemplateMethod\Taxes\Interface\TaxInterface;
use Invoice\DesignPatterns\Invoice;

abstract class AbstractTaxWithTwoRates implements TaxInterface
{
    public function calculateTax(Invoice $invoice): float
    {
        if ($this->shouldApplyTheMaximumRate($invoice)) {
            return $this->calculateMaxTax($invoice);
        }

        return $this->calculateMinTax($invoice);
    }

    abstract protected function shouldApplyTheMaximumRate(Invoice $invoice): bool;
    abstract protected function calculateMaxTax(Invoice $invoice): float;
    abstract protected function calculateMinTax(Invoice $invoice): float;
}
