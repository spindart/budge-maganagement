<?php

namespace Invoice\DesignPatterns;

class Invoice
{
    public float $amount;
    public int $quantityItems;

    public function __construct(float $amount, $quantityItems)
    {
        $this->amount = $amount;
        $this->quantityItems = $quantityItems ?: 1;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getQuantityItems(): int
    {
        return $this->quantityItems;
    }
}
