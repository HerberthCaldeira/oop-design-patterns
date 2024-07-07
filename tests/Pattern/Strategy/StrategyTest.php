<?php

namespace Pattern\Strategy;


use App\Pattern\Strategy\Context;
use App\Pattern\Strategy\Interfaces\Concrete\TaxFederal;
use App\Pattern\Strategy\Interfaces\Concrete\TaxLocal;
use App\Pattern\Strategy\Interfaces\ITaxCalculatorStrategy;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testConcreteHasSameInterface()
    {
        $this->assertInstanceOf(ITaxCalculatorStrategy::class, new TaxFederal());
        $this->assertInstanceOf(ITaxCalculatorStrategy::class, new TaxLocal());

        $payer = new Context(100);

        $this->assertEquals(30, $payer->calculateTax(new TaxFederal()));
        $this->assertEquals(20, $payer->calculateTax(new TaxLocal()));

    }

}
