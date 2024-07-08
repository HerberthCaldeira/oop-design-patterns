<?php

namespace App\Pattern\Observer;

use App\Pattern\Observer\Interfaces\IObserver;

class Observer implements Interfaces\IObserver
{
    public function __construct(private string $name)
    {}

    public function doSomething(): void
    {
        echo $this->name;
    }
}