<?php

use app\Core\Template;
use app\Core\ValidateData;
use app\Model\Book;
use app\Model\Dvd;
use app\Model\Furniture;

$template = new Template();

$page = $_SERVER["REQUEST_URI"] ?? null;
$requestMethod = $_SERVER["REQUEST_METHOD"];

switch ($page)
{
    case @"/":
        $dvdCollection = new Dvd();
        $furnitureCollection = new Furniture();
        $bookCollection = new Book();

        $template->render("product-list.php",
            [
                "dvd" => $dvdCollection->getCollection("dvd"),
                "furniture" => $furnitureCollection->getCollection("furniture"),
                "book" => $bookCollection->getCollection("book")
            ]);
        break;
    case @"/addproduct":
        $validator = new ValidateData();

        if ($requestMethod === "POST")
        {
            if ($validator->validatePostedData())
            {
                $template->render("add-product.php", ["err" => $validator->getErrors()]);
            }

        }
        $template->render("add-product.php", ["err" => []]);
        break;
    case @"/massdelete":
        if ($requestMethod === "POST")
        {
            $deleteData = new Dvd();
            $deleteData->massDelete([$_POST["ids"]]);
        }
        break;
    default:
        $template->render("_404.php");
        break;
}
