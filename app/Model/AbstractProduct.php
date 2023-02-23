<?php

namespace app\Model;

use app\Core\Model;

abstract class AbstractProduct extends Model
{

    private string $sku;
    private string $name;
    private float $price;

    public function setSku(string $sku): void
    {
        $this->setData("sku", $sku);
    }

    public function getSku(): string
    {
        return $this->getData("sku");
    }


    public function setName(string $name): void
    {
        $this->setData("name", $name);
    }

    public function getName(): string
    {
        return $this->getData("name");
    }

    public function setPrice(float $price): void
    {
        $this->setData("price", $price);
    }

    public function getPrice(): float
    {
        return $this->getData("price");
    }

}