<?php

namespace Invoice\DesignPatterns\Behavioral\ChainOfReponsability\Discounts;

use Invoice\DesignPatterns\Behavioral\ChainOfReponsability\Discounts\Abstracts\AbstractDiscount;
use Invoice\DesignPatterns\Invoice;

class NoDiscount extends AbstractDiscount
{

    public function __construct()
    {
        parent::__construct(null); // No next discount
    }
    public function calculateDiscount(Invoice $invoice): float
    {
        return 0;
    }
}
