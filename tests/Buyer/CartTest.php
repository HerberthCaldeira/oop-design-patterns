<?php


namespace Buyer;

use App\Buyer\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testCart()
    {
        $cart = new Cart();
        $cart->addItem(new \App\Buyer\Product(
            'Item 1',
            100
        ), 2);

        $this->assertEquals(1, $cart->countItems());


    }

    public function testCartTotal()
    {
        $cart = new Cart();
        $cart->addItem(new \App\Buyer\Product(
            'Item 1',
            100
        ), 2);

        $cart->addItem(new \App\Buyer\Product(
            'Item 1',
            500
        ), 1);

        $this->assertEquals(700, $cart->totalPrice());
    }

}
