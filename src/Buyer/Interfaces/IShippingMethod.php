<?php

namespace App\Buyer\Interfaces;

interface IShippingMethod
{
    public function getPrice(): int;

}