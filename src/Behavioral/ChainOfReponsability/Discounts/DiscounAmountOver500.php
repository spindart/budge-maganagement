<?php

namespace Invoice\DesignPatterns\Behavioral\ChainOfReponsability\Discounts;

use Invoice\DesignPatterns\Behavioral\ChainOfReponsability\Discounts\Abstracts\AbstractDiscount;
use Invoice\DesignPatterns\Invoice;

class DiscounAmountOver500 extends AbstractDiscount
{
    public function calculateDiscount(Invoice $invoice): float
    {
        if ($invoice->amount > 500) {
            return $invoice->amount * 0.05;
        }

        return $this->nextDiscount->calculateDiscount($invoice);
    }
}
