<?php

namespace app\Core;

use PDO;

class Database
{
    private PDO $pdo;

    public function __construct()
    {
        $dbCredentials = [
            "database" => "products",
            "username" => "root",
            "password" => "password",
            "servername" => "localhost"
        ];

        $database = $dbCredentials['database'];
        $servername = $dbCredentials['servername'];
        $username = $dbCredentials['username'];
        $password = $dbCredentials['password'];

        $dsn = "mysql:dbname=$database;host=$servername:3306";

        $this->pdo = new PDO($dsn, $username, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getProduct($tableName)
    {

        $sql = "SELECT * FROM $tableName JOIN product p ON ($tableName.product_id = p.product_id)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        $collection = [];

        foreach ($data as $item)
        {
            $collection[] = $item;
            echo "<pre>";
            var_dump($data);
            echo "</pre>";

        }
        return $collection;
    }

    public function getDvd()
    {
        return $this->pdo->query("SELECT * FROM dvd")->fetchAll(PDO::FETCH_ASSOC);

    }




    public function saveDvd($size)
    {
        $sql = "INSERT INTO dvd (size, product_id) VALUES ($size, 1)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();

    }


    public function saveMainProd($sku, $name, $price)
    {
        $floatedPRice = floatval($price);
        $sql = "INSERT INTO product (sku, name, price, type_id) VALUES ($sku, $name, $floatedPRice, 1)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }


    public function delete()
    {

    }

}