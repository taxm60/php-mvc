<?php

class Product  // Will have a table named "product" usually
{
    public function getData() : array
    {
        // product_db - product
        $dsn = "mysql:host=localhost;dbname=product_db;charset=utf8;port=3306";
        $pdo = new PDO($dsn, "root", "102112");
        $stmt = $pdo->query("SELECT * FROM product");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }
}