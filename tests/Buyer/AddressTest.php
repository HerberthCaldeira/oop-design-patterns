<?php


namespace Buyer;

use App\Buyer\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    public function testGetAddAddress()
    {
        $address = new Address('SOME ZIP');
        $this->assertEquals('SOME ZIP', $address->getZip());
    }

    public function testSetAddAddress()
    {
        $address = new Address('SOME ZIP');
        $address->setZip('ANOTHER ZIP');
        $this->assertEquals('ANOTHER ZIP', $address->getZip());
    }


}
