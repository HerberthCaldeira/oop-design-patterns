<?php

namespace App\Buyer\Interfaces;

interface IPaymentMethod
{
    public function pay(): int;

}