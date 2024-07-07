<?php

namespace App\Pattern\Composite;

use App\Buyer\Product;
use App\Pattern\Composite\Interfaces\IComponent;

class ProductLeaf implements IComponent
{
    public function __construct(
        private string $name,
        private int $value,
    ){}
    public function getValue(): int
    {
        return $this->value;
    }

    public function getName(): string
    {
        return $this->name;
    }

}