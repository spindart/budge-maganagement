<?php

namespace Invoice\DesignPatterns\Behavioral\ChainOfReponsability\Discounts\Abstracts;

use Invoice\DesignPatterns\Invoice;

abstract class AbstractDiscount
{
    public ?AbstractDiscount $nextDiscount;
    public function __construct(?AbstractDiscount $nextDiscount)
    {
        $this->nextDiscount = $nextDiscount;
    }
    abstract public function calculateDiscount(Invoice $invoice): float;
}
