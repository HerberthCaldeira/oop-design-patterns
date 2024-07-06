<?php


namespace Buyer;

use App\Buyer\Buyer;
use App\Buyer\Cart;
use App\Buyer\Order;
use App\Buyer\Product;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testOrder()
    {
        $buyer = new Buyer('Pedro');
        $order = new Order($buyer);

        $cart = new Cart();
        $cart->addItem(new Product('Item 1', 100), 2);
        $cart->addItem(new Product('Item 2', 200), 1);
        $order->setCart($cart);

        $paypal = new \App\Buyer\PaymentMethods\PayPal();
        $shippingMethod = new \App\Buyer\ShippingMethod\Correios();
        $order->setPaymentMethod($paypal);
        $order->setShippingMethod($shippingMethod);

        $this->assertEquals(410, $order->getPrice());
        $this->assertEquals($paypal, $order->getPaymentMethod());
        $this->assertEquals($shippingMethod, $order->getShippingMethod());
        $this->assertEquals($cart, $order->getCart());

    }

}
