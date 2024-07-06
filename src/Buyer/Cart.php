<?php

namespace App\Buyer;

class Cart
{
    public array $items = [];

    public function addItem(Product $product, int $quantity): void
    {
        $this->items[] = [
            'product' => $product,
            'quantity' => $quantity
        ];
    }

    public function countItems(): int
    {
        return count($this->items);
    }

    public function getItems(): \Iterator {
        return new \ArrayIterator($this->items);
    }

    public function totalPrice(): int {
        $total = 0;
        foreach ($this->getItems() as $item) {
            $total += $item['quantity'] * $item['product']->getPrice();
        }

        return $total;
    }

}