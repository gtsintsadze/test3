<?php

namespace app\Core;

class Model
{
    private array $data;

    public function setData(string $key, $value): void
    {
        $this->data[$key] = $value;
    }


    public function unsetData(string $key): void
    {
        unset($this->data[$key]);
    }


    public function getData($key = null)
    {
        if ($key === null)
        {
            return $this->data;
        }
        return $this->data[$key];
    }
}