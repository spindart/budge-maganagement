<?php

namespace Invoice\DesignPatterns\Behavioral\ChainOfReponsability;

use Invoice\DesignPatterns\Behavioral\ChainOfReponsability\Discounts\DiscounAmountOver500;
use Invoice\DesignPatterns\Behavioral\ChainOfReponsability\Discounts\DiscountOverFiveItemsAmountOver200;
use Invoice\DesignPatterns\Behavioral\ChainOfReponsability\Discounts\NoDiscount;
use Invoice\DesignPatterns\Invoice;

class DiscountCalculator
{
    public function calculateDiscount(Invoice $invoice): float
    {
        $discountChain = new DiscountOverFiveItemsAmountOver200(
            new DiscounAmountOver500(
                new NoDiscount()
            )
        );

        return $discountChain->calculateDiscount($invoice);
    }
}
