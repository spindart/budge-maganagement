<?php

namespace Invoice\DesignPatterns\Behavioral\Tests\Unit\Behavioral\Strategy;

use Invoice\DesignPatterns\Invoice;
use Invoice\DesignPatterns\Behavioral\Strategy\TaxCalculator;
use Invoice\DesignPatterns\Behavioral\Strategy\Taxes\Icms;
use Invoice\DesignPatterns\Behavioral\Strategy\Taxes\Iss;
use PHPUnit\Framework\TestCase;

class TaxCalculatorTest extends TestCase
{
    private $taxCalculator;

    public function testcalculateTaxInvoiceShouldReturnCorrectTaxInvoiceICMS(): void
    {

        $this->taxCalculator = new TaxCalculator(new Icms());
        //Arrange
        $invoiceMock = $this->getMockBuilder(Invoice::class)->setConstructorArgs([100, 1])->getMock();
        $invoiceMock->method('getAmount')->willReturn(100.0);
        //Act
        $tax = $this->taxCalculator->calculateTaxInvoice($invoiceMock);
        //Assert
        $this->assertEquals(10, $tax);
        $this->assertEquals(100, $invoiceMock->getAmount());
    }

    public function testCalculateTaxInvoiceShouldReturnCorrectTaxInvoiceISS(): void
    {
        $this->taxCalculator = new TaxCalculator(new Iss());
        //Arrange
        $invoiceMock = $this->getMockBuilder(Invoice::class)->setConstructorArgs([100, 1])->getMock();
        $invoiceMock->method('getAmount')->willReturn(100.0);
        //Act
        $tax = $this->taxCalculator->calculateTaxInvoice($invoiceMock);
        //Assert
        $this->assertEquals(6, $tax);
        $this->assertEquals(100, $invoiceMock->getAmount());
    }
}
