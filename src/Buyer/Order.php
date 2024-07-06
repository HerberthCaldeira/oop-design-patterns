<?php

namespace App\Buyer;

use App\Buyer\Interfaces\IPaymentMethod;
use App\Buyer\Interfaces\IShippingMethod;

class Order
{
    private Cart $cart;
    private IPaymentMethod $paymentMethod;
    private IShippingMethod $shippingMethod;
    public function __construct(public Buyer $buyer)
    {}
    public function setCart(Cart $cart): void{
        $this->cart = $cart;
    }

    public function getCart(): Cart{
        return $this->cart;
    }
    public function setPaymentMethod(IPaymentMethod $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }
    public function getPaymentMethod(): IPaymentMethod
    {
        return $this->paymentMethod;
    }

    public function setShippingMethod(IShippingMethod $shippingMethod): void
    {
        $this->shippingMethod= $shippingMethod;
    }
    public function getShippingMethod(): IShippingMethod
    {
        return $this->shippingMethod;
    }

    public function getPrice(): int
    {
        return $this->cart->totalPrice() + $this->shippingMethod->getPrice();

    }





}