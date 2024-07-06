<?php

namespace App\Buyer;

class Address
{
    private string $zip;
    public function __construct(string $zip){
        $this->zip = $zip;
    }
    public function setZip(string $zip): void
    {
        $this->zip = $zip;
    }
    public function getZip(): string {
        return $this->zip;
    }



}