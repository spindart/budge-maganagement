<?php

namespace Invoice\DesignPatterns\Behavioral\Tests\Unit\Behavioral\Strategy;

use Invoice\DesignPatterns\Invoice;
use Invoice\DesignPatterns\Behavioral\Strategy\TaxCalculatorWithLambda;
use PHPUnit\Framework\TestCase;

class TaxCalculatorWithLambdaTest extends TestCase
{
    private $taxCalculatorWithLambda;

    public function setUp(): void
    {
        $this->taxCalculatorWithLambda = new TaxCalculatorWithLambda();
    }


    public function testcalculateTaxInvoiceWithLambdaShouldReturnCorrectTaxInvoiceICMS(): void
    {
        //Arrange
        $invoiceMock = $this->getMockBuilder(Invoice::class)->setConstructorArgs([100, 1])->getMock();
        $invoiceMock->method('getAmount')->willReturn(100.0);

        $icms = function (Invoice $invoice): float {
            return $invoice->amount * 0.10;
        };
        //Act
        $tax = $this->taxCalculatorWithLambda->calculateTaxInvoice($invoiceMock, $icms);
        //Assert
        $this->assertEquals(10, $tax);
    }

    public function testCalculateTaxInvoiceWithLambdaShouldReturnCorrectTaxInvoiceISS(): void
    {
        //Arrange
        $invoiceMock = $this->getMockBuilder(Invoice::class)->setConstructorArgs([100, 1])->getMock();
        $invoiceMock->method('getAmount')->willReturn(100.0);

        $iss = function (Invoice $invoice): float {
            return $invoice->amount * 0.06;
        };

        //Act
        $tax = $this->taxCalculatorWithLambda->calculateTaxInvoice($invoiceMock, $iss);
        //Assert
        $this->assertEquals(6, $tax);
    }
}
