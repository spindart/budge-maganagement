<?php

namespace Invoice\DesignPatterns\Behavioral\Tests\Unit\Behavioral\ChainOfReponsability;

use Invoice\DesignPatterns\Invoice;
use Invoice\DesignPatterns\Behavioral\ChainOfReponsability\DiscountCalculator;
use PHPUnit\Framework\TestCase;

class DiscountCalculatorTest extends TestCase
{
    private $discountCalculator;

    public function setUp(): void
    {
        $this->discountCalculator = new DiscountCalculator();
    }

    public function testDiscountCalculatorShouldDiscountOverAmount500(): void
    {
        //Arrange
        $invoiceMock = $this->getMockBuilder(Invoice::class)->setConstructorArgs([600, 1])->getMock();
        $invoiceMock->method('getAmount')->willReturn(600.0);

        //Act
        $discount = $this->discountCalculator->calculateDiscount($invoiceMock);
        //Assert
        $this->assertEquals(30, $discount);
        $this->assertEquals(600, $invoiceMock->getAmount());
    }

    public function testDiscountCalculatorShouldDiscountOverFiveItemsAmountOver200(): void
    {
        //Arrange
        $invoiceMock = $this->getMockBuilder(Invoice::class)->setConstructorArgs([201, 6])->getMock();
        $invoiceMock->method('getAmount')->willReturn(600.0);

        //Act
        $discount = $this->discountCalculator->calculateDiscount($invoiceMock);
        //Assert
        $this->assertEquals(20.1, $discount);
        $this->assertEquals(600, $invoiceMock->getAmount());
    }

    public function testDiscountCalculatorShouldNotDiscount(): void
    {
        //Arrange
        $invoiceMock = $this->getMockBuilder(Invoice::class)->setConstructorArgs([200, 6])->getMock();
        $invoiceMock->method('getAmount')->willReturn(200.0);

        //Act
        $discount = $this->discountCalculator->calculateDiscount($invoiceMock);
        //Assert
        $this->assertEquals(0, $discount);
        $this->assertEquals(200, $invoiceMock->getAmount());
    }
}
