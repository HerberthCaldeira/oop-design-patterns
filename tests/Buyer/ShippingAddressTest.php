<?php


namespace Buyer;

use App\Buyer\ShippingAddress;
use PHPUnit\Framework\TestCase;

class ShippingAddressTest extends TestCase
{
    public function testShippingAddress()
    {
        $address = new ShippingAddress('SOME ZIP');
        $this->assertEquals('SOME ZIP', $address->getZip());

        $address->setZip('change zip');
        $address->setReceiver('receiver');

        $this->assertEquals('change zip', $address->getZip());
        $this->assertEquals('receiver', $address->getReceiver());
    }


}
