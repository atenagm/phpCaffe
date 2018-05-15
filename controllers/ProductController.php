<?php

require_once ROOT . '/models/Products.php';

class ProductController
{
    public function actionList()
    {
        $products = Products::getProductsList('https://www.w3schools.com/xml/simple.xml');
        require_once ROOT . '/views/products/index.php';
    }
}
