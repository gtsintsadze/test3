<?php

namespace app\Core;

use app\Model\AbstractProduct;


class ValidateData extends AbstractProduct
{
    private array $errors = [];

    public function isEmpty($value): bool
    {
        if ($value === "")
        {
            return true;
        }
        return false;
    }

    public function validateProductData()
    {
        $sku = $_POST["sku"];

        if ($this->isEmpty($sku))
        {
            $this->errors[] = "sku is missing";
        }
    }

    public function validateProductType(): void
    {
        if (!isset($_POST['product_type'])) {
            $this->errors[] = 'Please choose a product type';
        }
    }

    public function validatePostedData(): bool
    {
        $this->validateProductData();
        $this->validateProductType();

        if (isset($this->errors)) {
            return false;
        }
        return true;
    }
    
    
    public function getErrors(): array
    {
        return $this->errors;
    }

}