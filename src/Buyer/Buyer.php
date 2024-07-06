<?php

namespace App\Buyer;

class Buyer
{
    private array $address = [];
    public function __construct(
        private string $name,
    ){}

    public function getName(): string {
        return $this->name;
    }

    public function setName($name): void {
         $this->name = $name;
    }

    public function setAddress(Address $address): void {
         $this->address['address'] = $address;
    }
    public function getAddress(): ?Address {

        if(! isset($this->address['address'])) {
            return null;
        }
        return $this->address['address'];
    }
    public function setShippingAddress(ShippingAddress $address): void {
         $this->address['shipping'] = $address;
    }
    public function getShippingAddress(): ?ShippingAddress {
        if(! isset($this->address['shipping'])) {
            return null;
        }
        return $this->address['shipping'];
    }






}