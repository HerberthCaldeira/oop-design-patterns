<?php

namespace App\Pattern\Strategy;

use App\Pattern\Strategy\Interfaces\ITaxCalculatorStrategy;

class Context
{
    public function __construct(private int $revenue)
    {}
    public function calculateTax(ITaxCalculatorStrategy $taxCalculator)
    {
        return $taxCalculator->calculator($this->revenue);
    }

}