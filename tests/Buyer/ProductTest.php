<?php


namespace Buyer;

use App\Buyer\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testProduct()
    {
        $product = new Product('Item', 100);

        $this->assertEquals('Item', $product->getName());
        $this->assertEquals(100, $product->getPrice());

    }

    public function testSetProduct()
    {
        $product = new Product('Item', 100);

        $product->setName('Item 2');
        $product->setPrice(200);

        $this->assertEquals('Item 2', $product->getName());
        $this->assertEquals(200, $product->getPrice());

    }

}
