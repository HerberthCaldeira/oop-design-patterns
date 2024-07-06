<?php

namespace App\Buyer;

class ShippingAddress extends Address
{
    private string $receiver;
    public function setReceiver(string $receiver): void
    {
        $this->receiver = $receiver;
    }

    public function getReceiver(): string
    {
        return $this->receiver;
    }


}