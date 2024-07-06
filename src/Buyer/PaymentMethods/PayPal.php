<?php

namespace App\Buyer\PaymentMethods;

use App\Buyer\Interfaces\IPaymentMethod;

class PayPal implements IPaymentMethod
{
    public function pay(): int
    {
        return 10;
    }

}