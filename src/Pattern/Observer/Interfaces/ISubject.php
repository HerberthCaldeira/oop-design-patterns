<?php

namespace App\Pattern\Observer\Interfaces;

interface ISubject
{
    public function addObserver(IObserver $observer);
    public function notifyObservers();

}