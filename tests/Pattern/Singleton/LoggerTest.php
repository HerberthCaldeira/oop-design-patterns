<?php

namespace Pattern\Singleton;

use App\Pattern\Singleton\Logger;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testSingleton()
    {
        $logger = Logger::getInstance();
        $logger2 = Logger::getInstance();

        Assert::assertInstanceOf(Logger::class, $logger );
        Assert::assertEquals($logger2::getCount(), 1);





    }

}
