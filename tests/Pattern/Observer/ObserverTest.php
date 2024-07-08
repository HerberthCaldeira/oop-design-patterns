<?php

namespace Pattern\Observer;

use App\Pattern\Observer\Client;
use App\Pattern\Observer\Observer;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testObserver()
    {
        $observer = new Observer('observer1');
        $observer2 = new Observer('observer2');

        $client = new Client();
        $client->addObserver($observer);
        $client->addObserver($observer2);

        Assert::assertEquals(2, $client->countObservers());


        ob_start();
        $client->notifyObservers();
        $output = ob_get_clean();

        Assert::assertEquals('observer1observer2', $output);



    }

}
