<?php

namespace Invoice\DesignPatterns;

class Invoice
{
    public float $amount;
    public int $quantityItems;

    public string $currentStatus;

    public function __construct(float $amount, int $quantityItems)
    {
        $this->amount = $amount;
        $this->quantityItems = $quantityItems ?: 1;
    }

    public function applyExtraDiscount()
    {
        $this->amount -= $this->calculateDiscountExtra();
    }

    public function calculateDiscountExtra(): float
    {
        if ($this->currentStatus == 'IN_APPROVAL') {
            return $this->amount * 0.05;
        }

        if ($this->currentStatus == 'APRPROVED') {
            return $this->amount * 0.02;
        }
        throw new \DomainException('Approved and disapproved budgets cannot receive discounts');
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
