<?php

namespace Invoice\DesignPatterns\Behavioral\ChainOfReponsability\Discounts;

use Invoice\DesignPatterns\Behavioral\ChainOfReponsability\Discounts\Abstracts\AbstractDiscount;
use Invoice\DesignPatterns\Invoice;

class DiscountOverFiveItemsAmountOver200 extends AbstractDiscount
{
    public function calculateDiscount(Invoice $invoice): float
    {
        if ($invoice->quantityItems > 5 && $invoice->amount > 200) {
            return $invoice->amount * 0.1;
        }

        return $this->nextDiscount->calculateDiscount($invoice);
    }
}
