<?php

namespace App\Pattern\Observer;

class Client implements \App\Pattern\Observer\Interfaces\ISubject
{
    public function __construct(private array $observers = [])
    {}
    public function addObserver(\App\Pattern\Observer\Interfaces\IObserver $observer): void
    {
        $this->observers[] = $observer;
    }
    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->doSomething();
        }
    }

    public function countObservers(): int
    {
        return count($this->observers);
    }

}
