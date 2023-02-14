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
    case @"/posted_data":
        if ($requestMethod === "POST")
        {
            return $template->render("product-list.php");
        }
}
