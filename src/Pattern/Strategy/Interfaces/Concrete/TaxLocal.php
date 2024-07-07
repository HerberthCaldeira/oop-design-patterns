<?php

namespace App\Pattern\Strategy\Interfaces\Concrete;

use App\Pattern\Strategy\Interfaces\ITaxCalculatorStrategy;

class TaxLocal implements ITaxCalculatorStrategy
{

    public const LOCAL_TAX = 0.20;
    public function calculator($amount): int
    {
        return $amount * self::LOCAL_TAX;
    }

}