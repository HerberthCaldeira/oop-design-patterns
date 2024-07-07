<?php

namespace App\Pattern\Composite\Interfaces;

/**
 *
 */
interface IComponent
{
    public function getValue(): int;
    public function getName(): string;

}