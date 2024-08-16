<?php

namespace Budge\DesignPattern\Tests\Unit;

use Budge\DesignPatterns\Budge;
use Budge\DesignPatterns\TaxCalculator;
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
        $tax = $this->taxCalculator->calculateTaxBudge($budgeMock, 'ICMS');
        //Assert
        $this->assertEquals(10, $tax);
    }

    public function testCalculateTaxBudgeShouldReturnCorrectTaxBudgeISS(): void
    {
        //Arrange
        $budgeMock = $this->getMockBuilder(Budge::class)->setConstructorArgs([100])->getMock();
        $budgeMock->method('getValue')->willReturn(100.0);
        //Act
        $tax = $this->taxCalculator->calculateTaxBudge($budgeMock, 'ISS');
        //Assert
        $this->assertEquals(6, $tax);
    }
}
