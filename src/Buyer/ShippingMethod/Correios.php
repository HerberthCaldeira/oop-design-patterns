<?php

namespace App\Buyer\ShippingMethod;

use App\Buyer\Interfaces\IShippingMethod;

class Correios implements IShippingMethod
{
    public function getPrice(): int
    {
        return 10;
    }

}