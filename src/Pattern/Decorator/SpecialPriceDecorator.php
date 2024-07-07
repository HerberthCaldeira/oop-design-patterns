<?php

namespace App\Pattern\Decorator;

use App\Pattern\Decorator\Interfaces\ISnack;

class SpecialPriceDecorator implements ISnack
{
    public function __construct(private ISnack $snack)
    {}
    public function getPrice(): int
    {
        return $this->snack->getPrice() * 3;
    }


}