<?php

namespace App\Pattern\Decorator;

use App\Pattern\Decorator\Interfaces\ISnack;

class HotDog implements ISnack
{
    public function __construct(private int $price)
    {}

    public function getPrice(): int {
        return $this->price;
    }

}