<?php

namespace Buyer;

use App\Buyer\Address;
use App\Buyer\Buyer;
use App\Buyer\ShippingAddress;

class BuyerTest extends \PHPUnit\Framework\TestCase
{
    public function testConstruc()
    {
        $buyer = new Buyer('John');
        $this->assertEquals('John', $buyer->getName());
    }


    public function testBuyer()
    {

        $buyer = new Buyer('John');

        $address = new Address('ZIP');

        $shippingAddress = new ShippingAddress('ZIP SHIPPING');
        $shippingAddress->setReceiver('RECEIVER');

        $buyer->setAddress($address);
        $buyer->setShippingAddress($shippingAddress);

        $this->assertEquals('John', $buyer->getName());
        $this->assertEquals($address, $buyer->getAddress());
        $this->assertEquals($shippingAddress, $buyer->getShippingAddress());

        $buyer->setName('another name');
        $this->assertEquals('another name', $buyer->getName());

    }

    public function testUndefinedAddress()
    {
        $buyer = new Buyer('John');

        $this->assertNull($buyer->getAddress());
        $this->assertNull($buyer->getShippingAddress());

    }

}