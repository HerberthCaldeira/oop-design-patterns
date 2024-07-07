<?php

namespace Pattern\Decorator;

use App\Pattern\Decorator\HotDog;
use App\Pattern\Decorator\SpecialPriceDecorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDecoration(){

        $hotDog = new HotDog(100);
        $this->assertEquals(100, $hotDog->getPrice());

        $applySpecialPrice = new SpecialPriceDecorator($hotDog);
        $this->assertEquals(300, $applySpecialPrice->getPrice());

    }

}
