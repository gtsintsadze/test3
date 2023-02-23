<?php

namespace app\Model;

class Book extends AbstractProduct
{
    public function setWeight(float $weight): void
    {
        $this->setData("weight", $weight);
    }

    public function getWeight()
    {
        // todo
    }
}