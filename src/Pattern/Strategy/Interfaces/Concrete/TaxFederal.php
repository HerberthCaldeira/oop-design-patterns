<?php

namespace App\Pattern\Strategy\Interfaces\Concrete;

use App\Pattern\Strategy\Interfaces\ITaxCalculatorStrategy;

class TaxFederal implements ITaxCalculatorStrategy
{
    private const FEDERAL_TAX = 0.30;
    public function calculator(int $amount): int
    {
        return $amount * self::FEDERAL_TAX;
    }

}