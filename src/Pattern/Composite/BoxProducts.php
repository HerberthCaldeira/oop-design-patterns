<?php

namespace App\Pattern\Composite;

use App\Pattern\Composite\Interfaces\IComponent;

class BoxProducts implements IComponent
{
    public array $products = [];

    public function __construct(private string $name, private int $value)
    {}

    public function add(IComponent $product): void
    {
        $this->products[] = $product;
    }
    public function getValue(): int
    {
        $total = $this->value;
        foreach ($this->products as $product) {
            $total += $product->getValue();
        }

        return  $total;
    }

    public function getName(): string {
        $aux = $this->name;
        foreach ($this->products as $product) {
            $aux .= $product->getName();
        }
        return $aux;
    }

}