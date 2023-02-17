<?php

use app\Core\Database;
use app\Core\Template;

$template = new Template();

$products = new Database();

$page = $_SERVER["REQUEST_URI"] ?? null;
$requestMethod = $_SERVER["REQUEST_METHOD"];

switch ($page) {
    case @"/":
        $stmt = $products->getData();
        return $template->render("product-list.php", ["stmt"=> $stmt]);
        break;
    case @"/addproduct":
        return $template->render("add-product.php", );
        break;
    case @"/add-product":
        if ($requestMethod === "POST")
        {
            $product_Type = $_POST["product_type"];

            $sku = $_POST["sku"];
            $name = $_POST["name"];
            $price = $_POST["price"];

            if ($product_Type === "dvd")
            {
                // todo
            }

            if ($product_Type === "furniture")
            {
                // todo
            }

            if ($product_Type === "book")
            {
                // todo
            }
        }
        break;
}
