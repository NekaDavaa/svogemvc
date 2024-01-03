<?php

class Product
{
    public function getData(): array
    {
        $dsn = "mysql:host=79.98.104.6;dbname=miagodco_svogemvc;dbuser=miagodco_mvcadmin;dbpassword='b$pYfS@GUzpj'";

        $pdo = new PDO($dsn, "product_db_user", "secret", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $pdo->query("SELECT * FROM product");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}