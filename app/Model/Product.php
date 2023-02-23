<?php

namespace app\Model;

class Product extends AbstractProduct
{

    public string $sku;
    public string $name;
    public float $price;


    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}