<?php

require_once 'Models/Product.php';
$productModels = new Product($connection);
$productList = $productModels->getAllProducts(1, 10, '', 1, 'desc');
var_dump($productList);
$product = $productModels->getOneProduct(2);
echo "<pre>";
var_dump($product);
echo "</pre>";

$product = $productModels->getOneProduct(1, 1);
echo "<pre>";
var_dump($product);
echo "</pre>";