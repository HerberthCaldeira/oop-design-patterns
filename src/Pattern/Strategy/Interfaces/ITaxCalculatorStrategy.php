<?php

namespace App\Pattern\Strategy\Interfaces;

interface ITaxCalculatorStrategy
{
    public function calculator(int $amount): int;

}