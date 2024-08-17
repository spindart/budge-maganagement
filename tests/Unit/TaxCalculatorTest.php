<?php

namespace Budge\DesignPattern\Tests\Unit;

use Budge\DesignPatterns\Budge;
use Budge\DesignPatterns\Strategy\TaxCalculator;
use Budge\DesignPatterns\Strategy\Taxes\Icms;
use Budge\DesignPatterns\Strategy\Taxes\Iss;
use PHPUnit\Framework\TestCase;

class TaxCalculatorTest  extends TestCase
{
    private $taxCalculator;

    public function setUp(): void
    {
        $this->taxCalculator = new TaxCalculator();
    }

    public function testcalculateTaxBudgeShouldReturnCorrectTaxBudgeICMS(): void
    {
        //Arrange
        $budgeMock = $this->getMockBuilder(Budge::class)->setConstructorArgs([100])->getMock();
        $budgeMock->method('getValue')->willReturn(100.0);
        //Act
        $tax = $this->taxCalculator->calculateTaxBudge($budgeMock, new Icms());
        //Assert
        $this->assertEquals(10, $tax);
    }

    public function testCalculateTaxBudgeShouldReturnCorrectTaxBudgeISS(): void
    {
        //Arrange
        $budgeMock = $this->getMockBuilder(Budge::class)->setConstructorArgs([100])->getMock();
        $budgeMock->method('getValue')->willReturn(100.0);
        //Act
        $tax = $this->taxCalculator->calculateTaxBudge($budgeMock, new Iss());
        //Assert
        $this->assertEquals(6, $tax);
    }
}
