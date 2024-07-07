<?php

namespace Pattern\Composite;

use App\Pattern\Composite\BoxProducts;
use App\Pattern\Composite\ProductLeaf;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testComposite(){

        $bigBox = new BoxProducts('BIG BOX', 100);

        $bigBox->add(new ProductLeaf('p1', 10));
        $bigBox->add(new ProductLeaf('p2', 20));

        $smallBox = new BoxProducts('SMALL BOX', 20);
        $smallBox->add(new ProductLeaf('p3', 5));

        $bigBox->add($smallBox);

        Assert::assertEquals(155, $bigBox->getValue());
    }

    public function testCompositeName(){

        $bigBox = new BoxProducts('1', 100);

        $bigBox->add(new ProductLeaf('2', 10));
        $bigBox->add(new ProductLeaf('3', 20));

        $smallBox = new BoxProducts('4', 20);
        $smallBox->add(new ProductLeaf('5', 5));

        $bigBox->add($smallBox);

        Assert::assertEquals(155, $bigBox->getValue());
        Assert::assertEquals('12345', $bigBox->getName());
    }

}
