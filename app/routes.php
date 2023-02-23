<?php

use app\Core\Database;
use app\Core\Template;

$template = new Template();

$products = new Database();

$page = $_SERVER["REQUEST_URI"] ?? null;
$requestMethod = $_SERVER["REQUEST_METHOD"];

switch ($page) {
    case @"/":
        $getDvd = $products->getProduct("dvd");
        $product = $products->getProduct("dvd");


        return $template->render("product-list.php", ["product"=> $product]);
    case @"/addproduct":
        return $template->render("add-product.php", );
    case @"/add-product":
        if ($requestMethod === "POST")
        {

            $saveProduct = $products->saveMainProd($_POST["sku"],$_POST["name"],$_POST["price"]);
            $saveProductDesc = $products->saveDvd($_POST["size"]);

        }
        break;
}
